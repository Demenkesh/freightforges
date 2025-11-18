<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Categories;
use Illuminate\Support\Str;
use App\Models\TrackingCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Histories;
use Illuminate\Support\Facades\Mail;
use WisdomDiala\Countrypkg\Models\State;
use GuzzleHttp\Exception\RequestException;
use WisdomDiala\Countrypkg\Models\Country;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard'); // Return a custom login view
    }

    public function getsettrack()
    {
        $countries = Country::all();
        $code = TrackingCode::paginate(10);
        return view('admin.track.index', compact('countries', 'code')); // Return a custom login view
    }

    public function showHistory($id)
    {
        $parcel = TrackingCode::with(['latestHistory', 'histories'])->findOrFail($id);

        return view('admin.track.history', compact('parcel'));
    }


    // Fetch states based on country selection (for dynamic state population in the form)
    public function getStatesByCountry($countryId)
    {
        $states = State::where('country_id', $countryId)->get();
        return response()->json($states);
    }



    // Handle the form submission to create a tracking code

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'trip_type' => 'required|in:one-way,non-one-way',
            'origin_country_id' => 'required|exists:countries,id',
            'origin_state_id' => 'required|exists:states,id',
            'final_destination_country_id' => 'required|exists:countries,id',
            'final_destination_state_id' => 'required_if:trip_type,one-way|exists:states,id',
            'second_origin_country_id' => 'nullable|exists:countries,id',
            'mode' => 'required',
            'sender_name' => 'required|string',
            'sender_email' => 'required|email',
            'sender_address' => 'required|string',
            'sender_mobile' => 'required|string',
            'receiver_name' => 'required|string',
            'receiver_email' => 'required|email',
            'receiver_address' => 'required|string',
            'receiver_mobile' => 'required|string',
            'condition' => 'required|string',
            'shipment_type' => 'required|string',
            'shipment_content' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:0',
            'total_charges' => 'required|numeric|min:0',
            'estimated_delivery_date' => 'required|date',
        ]);
        // second_origin_state_id
        // Retrieve names using raw queries
        $originCountry = DB::table('countries')->where('id', $request->origin_country_id)->value('name');
        $originState = DB::table('states')->where('id', $request->origin_state_id)->value('name');
        $finalDestinationCountry = DB::table('countries')->where('id', $request->final_destination_country_id)->value('name');
        $finalDestinationState = DB::table('states')->where('id', $request->final_destination_state_id)->value('name');

        $secondOriginCountry = $request->second_origin_country_id
            ? DB::table('countries')->where('id', $request->second_origin_country_id)->value('name')
            : null;
        $secondOriginState = $request->second_origin_state_id
            ? DB::table('states')->where('id', $request->second_origin_state_id)->value('name')
            : null;

        // Now you can access the names
        $data = [
            'origin_country_name' => $originCountry,
            'origin_state_name' => $originState,
            'second_origin_country_name' => $secondOriginCountry,
            'second_origin_state_name' =>  $secondOriginState,
            'final_destination_country_name' => $finalDestinationCountry,
            'final_destination_state_name' => $finalDestinationState,
        ];
        $numbers = range(0, 9);
        shuffle($numbers); // Shuffle the array
        $randomNumbers = implode('', array_slice($numbers, 0, 10)); // Take first 10 digits

        // dd($data);
        // Generate a unique tracking code
        $trackingCode = TrackingCode::create([
            'code' => 'DFJ_' . strtoupper(Str::random(7)), // 'sku' + 7 random characters
            'trip_type' => $request->trip_type,
            'origin_country_id' => $data['origin_country_name'],
            'origin_state_id' => $data['origin_state_name'],

            // 'second_destination_state_id' => $request->trip_type === 'non-one-way' ? $data['second_origin_state_name'] : null,
            // 'second_destination_country_id' => $request->trip_type === 'non-one-way' ? $data['second_origin_country_name'] : null,

            'final_destination_state_id' =>  $data['final_destination_state_name'],
            'final_destination_country_id' =>  $data['final_destination_country_name'],

            'status' => 'pending', // Initially set status to pending
            'transport_mode_id' => $request->mode,

            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_address' => $request->sender_address,
            'sender_mobile' => $request->sender_mobile,
            'receiver_name' => $request->receiver_name,
            'receiver_email' => $request->receiver_email,
            'receiver_address' => $request->receiver_address,
            'receiver_mobile' => $request->receiver_mobile,
            'bill_of_lading' =>  $randomNumbers,
            'shipment_type' => $request->shipment_type,
            'shipment_content' => $request->shipment_content,
            'quantity' => $request->quantity,
            'weight' => $request->weight,
            'total_charges' => $request->total_charges,
            'estimated_delivery_date' => $request->estimated_delivery_date,
        ]);

        // Save to histories table ONLY IF non-one-way
        if ($request->trip_type === 'non-one-way') {

            $exists = DB::table('histories')
                ->where('tracking_code_id', $trackingCode->id)
                ->where('country', $data['second_origin_country_name'])
                ->where('state', $data['second_origin_state_name'])
                ->exists();

            if (! $exists) {
                DB::table('histories')->insert([
                    'tracking_code_id' => $trackingCode->id,
                    'country' => $data['second_origin_country_name'],
                    'state' => $data['second_origin_state_name'],
                    'condition' => $request->condition, // You might want to replace 'some condition' with actual data
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        return redirect()->back()->with('status', 'Tracking code created successfully. Code: ' . $trackingCode->code)
            ->with('data', $data); // Optionally pass the names back to the view
    }

    public function updates(Request $request, $id)
    {
        $request->validate([
            'trip_type' => 'required|in:one-way,non-one-way',
            'origin_country_id' => 'required|exists:countries,id',
            'origin_state_id' => 'required|exists:states,id',
            'final_destination_country_id' => 'required|exists:countries,id',
            'final_destination_state_id' => 'required_if:trip_type,one-way|exists:states,id',
            'second_origin_country_id' => 'nullable|exists:countries,id',
            'second_origin_state_id' => 'nullable|exists:states,id',
            'mode' => 'required',
            'sender_name' => 'required|string',
            'sender_email' => 'required|email',
            'sender_address' => 'required|string',
            'sender_mobile' => 'required|string',
            'receiver_name' => 'required|string',
            'receiver_email' => 'required|email',
            'receiver_address' => 'required|string',
            'receiver_mobile' => 'required|string',
            'shipment_type' => 'nullable|string',
            'shipment_content' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:0',
            'total_charges' => 'required|numeric|min:0',
            'estimated_delivery_date' => 'required|date',
        ]);

        // Retrieve names using raw queries
        $originCountry = DB::table('countries')->where('id', $request->origin_country_id)->value('name');
        $originState = DB::table('states')->where('id', $request->origin_state_id)->value('name');
        $finalDestinationCountry = DB::table('countries')->where('id', $request->final_destination_country_id)->value('name');
        $finalDestinationState = DB::table('states')->where('id', $request->final_destination_state_id)->value('name');

        $secondOriginCountry = $request->second_origin_country_id
            ? DB::table('countries')->where('id', $request->second_origin_country_id)->value('name')
            : null;
        $secondOriginState = $request->second_origin_state_id
            ? DB::table('states')->where('id', $request->second_origin_state_id)->value('name')
            : null;

        $data = [
            'origin_country_name' => $originCountry,
            'origin_state_name' => $originState,
            'second_origin_country_name' => $secondOriginCountry,
            'second_origin_state_name' => $secondOriginState,
            'final_destination_country_name' => $finalDestinationCountry,
            'final_destination_state_name' => $finalDestinationState,
        ];

        // Find the tracking code record
        $tracking = TrackingCode::findOrFail($id);

        // Update all fields like in store
        $tracking->update([
            'trip_type' => $request->trip_type,
            'origin_country_id' => $data['origin_country_name'],
            'origin_state_id' => $data['origin_state_name'],

            'second_destination_state_id' => $request->trip_type === 'non-one-way' ? $data['second_origin_state_name'] : null,
            'second_destination_country_id' => $request->trip_type === 'non-one-way' ? $data['second_origin_country_name'] : null,

            'final_destination_state_id' =>  $data['final_destination_state_name'],
            'final_destination_country_id' =>  $data['final_destination_country_name'],

            'transport_mode_id' => $request->mode,

            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_address' => $request->sender_address,
            'sender_mobile' => $request->sender_mobile,
            'receiver_name' => $request->receiver_name,
            'receiver_email' => $request->receiver_email,
            'receiver_address' => $request->receiver_address,
            'receiver_mobile' => $request->receiver_mobile,

            'shipment_type' => 'parcel',
            'shipment_content' => $request->shipment_content,
            'quantity' => $request->quantity,
            'weight' => $request->weight,
            'total_charges' => $request->total_charges,
            'estimated_delivery_date' => $request->estimated_delivery_date,
        ]);

        // Save to histories table ONLY IF non-one-way
        if ($request->trip_type === 'non-one-way') {

            $exists = DB::table('histories')
                ->where('tracking_code_id', $tracking->id)
                ->where('country', $data['second_origin_country_name'])
                ->where('state', $data['second_origin_state_name'])
                ->exists();

            if (!$exists || $exists) {
                DB::table('histories')->insert([
                    'tracking_code_id' => $tracking->id,
                    'country' => $data['second_origin_country_name'],
                    'state' => $data['second_origin_state_name'],
                    'condition' => 'in_transit',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }


        return redirect()->back()->with('status', 'Tracking updated successfully')->with('data', $data);
    }



    public function update(Request $request, $id)
    {
        $trackingCode = TrackingCode::findOrFail($id);
        // Update the status
        $trackingCode->status = $request->status;
        $trackingCode->save();

        return response()->json(['success' => true, 'status' => $trackingCode->status]);
    }
    public function updatess(Request $request, $id)
    {
        // $trackingCode = TrackingCode::findOrFail($id);
        $history = Histories::where('tracking_code_id', $id)->latest()->first();


        // Update the status
        $history->condition = $request->condition;
        $history->save();

        return response()->json(['success' => true, 'status' => $history->condition]);
    }


    public function getParcelDetails(Request $request)
    {
        $trackingNumber = $request->query('tracking_number');

        // Retrieve the parcel by tracking code
        $parcel = TrackingCode::with('histories')->where('code', $trackingNumber)->first();

        if ($parcel) {
            return response()->json(['success' => true, 'parcel' => $parcel], 200);
        } else {
            return response()->json(['success' => false, 'message' => 'Parcel not found'], 404);
        }
    }

    public function send(Request $request)
    {

        try {
            // Validate input
            $validated = $request->validate([
                'name'        => 'required|string|max:100',
                'email'       => 'required|email|max:150',
                'phone'       => 'nullable|string|max:20',
                'user_message' => 'required|string|max:1000',
            ]);


            // Send email
            Mail::send('emails.quote', $validated, function ($msg) use ($validated) {
                $msg->to(env('MAIL_FROM_ADDRESS'))
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject("New Quote Request from " . $validated['name']);
            });


            return back()->with('status', 'Your request has been sent!');
        } catch (\Throwable $th) {
            // dd($th);
            return back()->with('error', 'error!');
        }
    }
}
