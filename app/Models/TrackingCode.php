<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingCode extends Model
{
    use HasFactory;
    protected $table = 'tracking_codes';
    // Specify which attributes should be mass assignable
    protected $fillable = [
        'code',
        'trip_type',
        'origin_country_id',
        'origin_state_id',
        'second_destination_country_id',
        'second_destination_state_id',
        'final_destination_country_id',
        'final_destination_state_id',
        'status',
        'transport_mode_id',
        // New fields added
        'estimated_delivery_date', // Delivery Date
        'sender_name',             // Sender's Name
        'sender_email',            // Sender's Email
        'sender_address',          // Sender's Address
        'sender_mobile',           // Sender's Mobile
        'receiver_name',           // Receiver's Name
        'receiver_email',          // Receiver's Email
        'receiver_address',        // Receiver's Address
        'receiver_mobile',         // Receiver's Mobile
        'bill_of_lading',          // Bill of Lading
        'shipment_type',           // Type of Shipment
        'shipment_content',        // Content of Shipment
        'quantity',                // Quantity of Product
        'weight',                  // Weight of Product
        'total_charges',           // Total Charges
    ];
    public function histories()
    {
        return $this->hasMany(Histories::class, 'tracking_code_id');
    }
    public function latestHistory()
    {
        return $this->hasOne(Histories::class, 'tracking_code_id')->latestOfMany();
    }
}
