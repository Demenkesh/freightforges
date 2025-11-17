@extends('layouts.frontend')
@section('title')
    Track Your Shipment
@endsection
@section('content')
    <style>
        /* Modern clean UI */
        .info-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 5px 18px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
        }

        .info-title {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* Progress Bar */
        .progress-wrapper {
            padding: 25px;
        }

        .progress-steps {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .step {
            text-align: center;
            flex: 1;
        }

        .step-circle {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #ccc;
            margin: 0 auto;
        }

        .step.active .step-circle {
            background: #1a73e8;
        }

        .step-label {
            margin-top: 8px;
            font-size: 14px;
        }

        .step-line {
            height: 4px;
            background: #ccc;
            flex: 1;
            margin: 0 8px;
        }

        .step-line.active {
            background: #1a73e8;
        }

        /* Map card */
        .map-card {
            width: 100%;
            height: 260px;
            border-radius: 14px;
            overflow: hidden;
        }

        .map-card iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* Clean Table */
        .clean-table th {
            font-weight: 600;
            color: #444;
            width: 40%;
        }

        .clean-table td {
            color: #666;
        }

        /* Waybill Title */
        .waybill-title {
            font-size: 26px;
            font-weight: 700;
            color: #0056b3;
            margin-bottom: 18px;
        }

        .track-header {
            background: url('/assets/images/breadcumb/breadcumb.jpg') center/cover no-repeat;
            padding: 130px 0;
            text-align: center;
            color: white;
        }

        .track-header h2 {
            font-size: 48px;
            font-weight: 700;
        }

        .track-header span {
            font-size: 18px;
            opacity: 0.9;
        }

        .track-search-box {
            background: #0b1f4a;
            padding: 40px;
            border-radius: 12px;
            color: white;
        }

        .track-input {
            border-radius: 8px !important;
            height: 55px;
            padding-left: 15px;
            border: none !important;
        }

        .track-btn {
            height: 55px;
            padding: 0 35px;
            background: linear-gradient(45deg, #007bff, #0056b3);
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: .3s;
        }

        .track-btn:hover {
            background: linear-gradient(45deg, #0056b3, #003c80);
        }

        .tracking-timeline {
            border-left: 3px solid #1a73e8;
            padding-left: 25px;
            margin-top: 20px;
        }

        .timeline-item {
            margin-bottom: 25px;
            position: relative;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            background: #1a73e8;
            border-radius: 50%;
            left: -32px;
            top: 5px;
        }

        .info-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
        }

        .info-card h4 {
            font-weight: 700;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .info-card table th {
            width: 40%;
            color: #444;
            font-weight: 600;
        }

        .waybill-box {
            font-size: 22px;
            font-weight: 700;
            color: #003399;
        }
    </style>

    <!-- HEADER -->
    <div class="track-header">
        <span>Reliable, Fast & Secure Delivery</span>
        <br /> <br />
        <h2 style="color: white;">Track &amp; Trace</h2>
    </div>

    <div class="container mt-5">

        <!-- TRACK SEARCH BOX -->
        <div class="track-search-box">
            <h3 class="mb-3 text-light">Enter Your Tracking Number</h3>
            <div class="d-flex">
                <input type="text" id="trackingNumber" class="form-control track-input" placeholder="Enter tracking number">
                <button class="track-btn ms-3" onclick="getParcelDetails()">Track</button>
            </div>
        </div>

        <br>

        <!-- AJAX RESULTS -->
        <div id="parcelDetails" class="mt-4"></div>

    </div>
@endsection
@section('scripts')
    <script>
        function getParcelDetails() {
            const trackingNumber = document.getElementById('trackingNumber').value;
            const parcelDetailsDiv = document.getElementById('parcelDetails');

            parcelDetailsDiv.innerHTML = "";

            if (!trackingNumber) {
                toastr.error('Please enter a tracking number.');
                return;
            }

            fetch(`{{ route('parcel.details') }}?tracking_number=${trackingNumber}`)
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        displayParcelDetails(data.parcel);
                    } else {
                        toastr.error(data.message);
                    }
                })
                .catch(() => toastr.error("Unable to fetch parcel details."));
        }

        // function displayParcelDetails(parcel) {
        //     const parcelDetailsDiv = document.getElementById('parcelDetails');

        //     const html = `
    //         <div class="row">
    //             <div class="col-lg-8">

    //                 <div class="info-card">
    //                     <h4>Shipment Progress</h4>

    //                     <p class="waybill-box">Waybill: ${parcel.code}</p>

    //                     <div class="tracking-timeline">
    //                         <div class="timeline-item">
    //                             <strong>${new Date().toLocaleDateString()}</strong><br>
    //                             Status: ${parcel.status.toUpperCase()} <br>
    //                             Trip Type: ${parcel.trip_type} <br>
    //                             From: ${parcel.origin_country_id} ${parcel.origin_state_id ?? ''}<br>
    //                             To: ${parcel.final_destination_country_id} ${parcel.final_destination_state_id ?? ''}
    //                         </div>
    //                     </div>
    //                 </div>

    //             </div>

    //             <!-- RIGHT SIDE -->
    //             <div class="col-lg-4">

    //                 <div class="info-card">
    //                     <h4>Delivery Information</h4>
    //                     <table class="table">
    //                         <tr><th>Est. Delivery:</th><td>${new Date(parcel.estimated_delivery_date).toLocaleDateString()}</td></tr>
    //                         <tr><th>Origin:</th><td>${parcel.origin_country_id} ${parcel.origin_state_id ?? ''}</td></tr>
    //                         <tr><th>Destination:</th><td>${parcel.final_destination_country_id} ${parcel.final_destination_state_id ?? ''}</td></tr>
    //                     </table>
    //                 </div>

    //                 <div class="info-card">
    //                     <h4>Sender Details</h4>
    //                     <table class="table">
    //                         <tr><th>Name:</th><td>${parcel.sender_name}</td></tr>
    //                         <tr><th>Email:</th><td>${parcel.sender_email}</td></tr>
    //                         <tr><th>Address:</th><td>${parcel.sender_address}</td></tr>
    //                         <tr><th>Mobile:</th><td>${parcel.sender_mobile}</td></tr>
    //                     </table>
    //                 </div>

    //                 <div class="info-card">
    //                     <h4>Receiver Details</h4>
    //                     <table class="table">
    //                         <tr><th>Name:</th><td>${parcel.receiver_name}</td></tr>
    //                         <tr><th>Email:</th><td>${parcel.receiver_email}</td></tr>
    //                         <tr><th>Address:</th><td>${parcel.receiver_address}</td></tr>
    //                         <tr><th>Mobile:</th><td>${parcel.receiver_mobile}</td></tr>
    //                     </table>
    //                 </div>

    //                 <div class="info-card">
    //                     <h4>Shipment Details</h4>
    //                     <table class="table">
    //                         <tr><th>BOL:</th><td>${parcel.bill_of_lading}</td></tr>
    //                         <tr><th>Type:</th><td>${parcel.shipment_type}</td></tr>
    //                         <tr><th>Content:</th><td>${parcel.shipment_content}</td></tr>
    //                         <tr><th>Quantity:</th><td>${parcel.quantity}</td></tr>
    //                         <tr><th>Weight:</th><td>${parcel.weight} kg</td></tr>
    //                         <tr><th>Transport:</th><td>${parcel.transport_mode_id}</td></tr>
    //                         <tr><th>Total Charges:</th><td>${parcel.total_charges}</td></tr>
    //                     </table>
    //                 </div>

    //             </div>
    //         </div>
    //     `;

        //     parcelDetailsDiv.innerHTML = html;
        // }
        function displayParcelDetails(parcel) {
            const parcelDetailsDiv = document.getElementById('parcelDetails');

            // Determine progress bar state
            const status = parcel.status.toLowerCase();
            const inTransitActive = (status === 'in_transit' || status === 'arrived' || status === 'delivered');
            const arrivedActive = (status === 'arrived' || status === 'delivered');
            const deliveredActive = (status === 'delivered');

            const html = `
        <div class="row">

            <!-- LEFT SIDE -->
            <div class="col-lg-8">

                <!-- PROGRESS CARD -->
                <div class="info-card">
                    <div class="info-title">Shipment Status</div>

                    <div class="progress-wrapper">
                        <div class="progress-steps">

                            <div class="step ${inTransitActive ? 'active' : ''}">
                                <div class="step-circle"></div>
                                <div class="step-label">In Transit</div>
                            </div>

                            <div class="step-line ${arrivedActive ? 'active' : ''}"></div>

                            <div class="step ${arrivedActive ? 'active' : ''}">
                                <div class="step-circle"></div>
                                <div class="step-label">Arrived</div>
                            </div>

                            <div class="step-line ${deliveredActive ? 'active' : ''}"></div>

                            <div class="step ${deliveredActive ? 'active' : ''}">
                                <div class="step-circle"></div>
                                <div class="step-label">Delivered</div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- SHIPMENT PROGRESS CARD -->
                <div class="info-card">
                    <div class="info-title">Shipment Progress</div>

                    <div class="waybill-title">
                        AWB - ${parcel.code}
                    </div>

                    <table class="table clean-table">
                        <tr><th>Date:</th><td>${new Date(parcel.created_at).toLocaleDateString()}</td></tr>
                        <tr><th>Status:</th><td>${parcel.status.toUpperCase()}</td></tr>
                        <tr><th>Trip Type:</th><td>${parcel.trip_type}</td></tr>
                        <tr><th>Transport Mode:</th><td>${parcel.transport_mode_id}</td></tr>
                        <tr><th>Origin:</th><td>${parcel.origin_country_id} ${parcel.origin_state_id ?? ''}</td></tr>
                        <tr><th>Destination:</th><td>${parcel.final_destination_country_id} ${parcel.final_destination_state_id ?? ''}</td></tr>
                    </table>

                </div>

            </div>

            <!-- RIGHT SIDE -->
            <div class="col-lg-4">

                <!-- MAP UI -->
                <div class="info-card">
                    <div class="info-title">Current Location</div>
                    <div class="map-card">
                        <iframe
                            src="https://www.google.com/maps?q=${parcel.current_lat ?? '9.0820'},${parcel.current_lng ?? '8.6753'}&z=6&output=embed">
                        </iframe>
                    </div>
                </div>

                <!-- DELIVERY INFO -->
                <div class="info-card">
                    <div class="info-title">Delivery Information</div>
                    <table class="table clean-table">
                        <tr><th>Est. Delivery:</th><td>${new Date(parcel.estimated_delivery_date).toLocaleDateString()}</td></tr>
                        <tr><th>Origin:</th><td>${parcel.origin_country_id} ${parcel.origin_state_id??''}</td></tr>
                        <tr><th>Destination:</th><td>${parcel.final_destination_country_id} ${parcel.final_destination_state_id??''}</td></tr>
                    </table>
                </div>

                <!-- SENDER -->
                <div class="info-card">
                    <div class="info-title">Sender Details</div>
                    <table class="table clean-table">
                        <tr><th>Name:</th><td>${parcel.sender_name}</td></tr>
                        <tr><th>Email:</th><td>${parcel.sender_email}</td></tr>
                        <tr><th>Address:</th><td>${parcel.sender_address}</td></tr>
                        <tr><th>Mobile:</th><td>${parcel.sender_mobile}</td></tr>
                    </table>
                </div>

                <!-- RECEIVER -->
                <div class="info-card">
                    <div class="info-title">Receiver Details</div>
                    <table class="table clean-table">
                        <tr><th>Name:</th><td>${parcel.receiver_name}</td></tr>
                        <tr><th>Email:</th><td>${parcel.receiver_email}</td></tr>
                        <tr><th>Address:</th><td>${parcel.receiver_address}</td></tr>
                        <tr><th>Mobile:</th><td>${parcel.receiver_mobile}</td></tr>
                    </table>
                </div>

                <!-- SHIPMENT DETAILS -->
                <div class="info-card">
                    <div class="info-title">Shipment Details</div>
                    <table class="table clean-table">
                        <tr><th>BOL:</th><td>${parcel.bill_of_lading}</td></tr>
                        <tr><th>Type:</th><td>${parcel.shipment_type}</td></tr>
                        <tr><th>Content:</th><td>${parcel.shipment_content}</td></tr>
                        <tr><th>Quantity:</th><td>${parcel.quantity}</td></tr>
                        <tr><th>Weight:</th><td>${parcel.weight} kg</td></tr>
                        <tr><th>Transport:</th><td>${parcel.transport_mode_id}</td></tr>
                        <tr><th>Total Charges:</th><td>${parcel.total_charges}</td></tr>
                    </table>
                </div>

            </div>

        </div>
    `;

            parcelDetailsDiv.innerHTML = html;
        }
    </script>
@endsection
