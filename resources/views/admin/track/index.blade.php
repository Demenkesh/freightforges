@extends('layouts.admin')
@section('title')
    Tracking
@endsection
@push('styles')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        table.dataTable.no-footer {
            border-bottom: 1px solid #e3e3e3 !important;
        }
    </style>
@endpush
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Tracking</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Tracking</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block text-end">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modals-slide-in">
                        Add a new Tracking
                    </button>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic table -->
                <section>
                    <div class="row">
                        <div class="col-12">
                            <div class="card table-responsive">


                                <table id="example1" class="table ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Trip_type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($code as $item)
                                            @php
                                                $statusClass = '';
                                                switch ($item['status']) {
                                                    case 'in_progress':
                                                        $statusClass = 'text-primary'; // Blue for In Progress
                                                        break;
                                                    case 'shipped':
                                                        $statusClass = 'text-info'; // Light blue for Shipped
                                                        break;
                                                    case 'in_transit':
                                                        $statusClass = 'text-warning'; // Orange for In Transit
                                                        break;
                                                    case 'on_hold':
                                                        $statusClass = 'text-secondary'; // Gray for On Hold
                                                        break;
                                                    case 'delayed':
                                                        $statusClass = 'text-danger'; // Red for Delayed
                                                        break;
                                                    case 'cancelled':
                                                        $statusClass = 'text-dark'; // Dark for Cancelled
                                                        break;
                                                    case 'delivered':
                                                        $statusClass = 'text-success'; // Green for Delivered
                                                        break;
                                                    default:
                                                        $statusClass = 'text-muted'; // Muted text color for unknown statuses
                                                        break;
                                                }
                                            @endphp

                                            <tr>
                                                <th scope="row">{{ $item['id'] }}</th>
                                                <td>{{ $item['code'] }}</td>
                                                <td>{{ $item['trip_type'] }}</td>
                                                {{-- <td class="refreshe">{{ $item['status'] }}</td> --}}
                                                <td class="{{ $statusClass }}  refreshe">
                                                    {{ ucfirst(str_replace('_', ' ', $item['status'])) }}</td>
                                                <td class=" flex-column flex-md-row align-items-md-center">

                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#staticBackdrop{{ $item['id'] }}">
                                                        View
                                                    </button>

                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="staticBackdrop{{ $item['id'] }}"
                                                data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                aria-labelledby="staticBackdrop{{ $item['id'] }}Label" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content border-0 shadow-lg">
                                                        <div class="modal-header bg-primary text-white">
                                                            <h5 class="modal-title"
                                                                id="staticBackdrop{{ $item['id'] }}Label">
                                                                <strong>{{ $item['code'] }}</strong>
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h5 class="text-primary">Shipping Details</h5>
                                                                        <hr />
                                                                        <ul class="list-group">
                                                                            <li class="list-group-item">
                                                                                <strong>Code:</strong> {{ $item['code'] }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong>Trip
                                                                                    Type:</strong> {{ $item['trip_type'] }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong>Origin
                                                                                    Country ID:</strong>
                                                                                {{ $item['origin_country_id'] }}</li>
                                                                            <li class="list-group-item"><strong>Origin State
                                                                                    ID:</strong>
                                                                                {{ $item['origin_state_id'] }}</li>
                                                                            <li class="list-group-item"><strong>Second
                                                                                    Destination Country ID:</strong>
                                                                                {{ $item['second_destination_country_id'] }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong>Second
                                                                                    Destination State ID:</strong>
                                                                                {{ $item['second_destination_state_id'] }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong>Final
                                                                                    Destination Country ID:</strong>
                                                                                {{ $item['final_destination_country_id'] }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong>Final
                                                                                    Destination State ID:</strong>
                                                                                {{ $item['final_destination_state_id'] }}
                                                                            </li>
                                                                            <li class="list-group-item"><strong>Transport
                                                                                    Mode ID:</strong>
                                                                                {{ $item['transport_mode_id'] }}</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">

                                                            <select class="form-select"
                                                                id="statusSelect{{ $item['id'] }}"
                                                                onchange="updateOrderStatus('{{ $item['id'] }}')">
                                                                <option value="pending"
                                                                    {{ $item['status'] === 'pending' ? 'selected' : '' }}>
                                                                    Pending</option>
                                                                <option value="in_progress"
                                                                    {{ $item['status'] === 'in_progress' ? 'selected' : '' }}>
                                                                    In Progress</option>
                                                                <option value="shipped"
                                                                    {{ $item['status'] === 'shipped' ? 'selected' : '' }}>
                                                                    Shipped</option>
                                                                <option value="in_transit"
                                                                    {{ $item['status'] === 'in_transit' ? 'selected' : '' }}>
                                                                    In Transit</option>
                                                                <option value="on_hold"
                                                                    {{ $item['status'] === 'on_hold' ? 'selected' : '' }}>
                                                                    On Hold</option>
                                                                <option value="delayed"
                                                                    {{ $item['status'] === 'delayed' ? 'selected' : '' }}>
                                                                    Delayed</option>
                                                                <option value="cancelled"
                                                                    {{ $item['status'] === 'cancelled' ? 'selected' : '' }}>
                                                                    Cancelled</option>
                                                                <option value="delivered"
                                                                    {{ $item['status'] === 'delivered' ? 'selected' : '' }}>
                                                                    Delivered</option>
                                                            </select>

                                                            {{-- <button type="button"
                                                                class="btn btn-{{ $item['status'] === 'pending' ? 'danger' : 'success' }}"
                                                                id="updateButton{{ $item['id'] }}"
                                                                onclick="updateTrackingCode('{{ $item['id'] }}')">
                                                                {{ $item['status'] === 'pending' ? 'Mark as Complete' : 'Completed' }}
                                                            </button> --}}
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @empty
                                            <tr>
                                                <td colspan="7">No Tracking</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>





                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        {{ $code->links() }}
                                    </ul>
                                </nav>


                            </div>
                        </div>
                    </div>


                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form action="{{ url('admin/set_track') }}" method="POST" enctype="multipart/form-data"
                                class="add-new-record modal-content pt-0">
                                @csrf

                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="mb-1">
                                        <label for="trip_type">Trip Type</label>
                                        <select name="trip_type" id="trip_type" class="form-control" required>
                                            <option value="one-way">One-way</option>
                                            <option value="non-one-way">Non One-way</option>
                                        </select>
                                    </div>

                                    <!-- Origin Country and State -->
                                    <div class="mb-1">
                                        <label for="origin_country">Origin Country</label>
                                        <select name="origin_country_id" id="origin_country" class="form-control"
                                            required>
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label for="origin_state_id">Origin State</label>
                                        <select name="origin_state_id" id="origin_state_id" class="form-control"
                                            required>
                                            <option value="">Select State</option>
                                        </select>
                                    </div>

                                    <!-- Second Origin Country and State for Non-One-Way -->
                                    <div class="mb-1" id="second_origin_field" style="display:none;">
                                        <label for="second_origin_country">Second Origin Country (Non-One-way only)</label>
                                        <select name="second_origin_country_id" id="second_origin_country"
                                            class="form-control">
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-1" id="second_origin_state_field" style="display:none;">
                                        <label for="second_origin_state_id">Second Origin State (Non-One-way only)</label>
                                        <select name="second_origin_state_id" id="second_origin_state_id"
                                            class="form-control">
                                            <option value="">Select State</option>
                                        </select>
                                    </div>

                                    <!-- Final Destination Country and State -->
                                    <div class="mb-1" id="final_destination_field">
                                        <label for="final_destination_country">Final Destination Country</label>
                                        <select name="final_destination_country_id" id="final_destination_country"
                                            class="form-control" required>
                                            <option value="">Select Country</option>
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-1" id="final_destination_state_field">
                                        <label for="final_destination_state_id">Final Destination State</label>
                                        <select name="final_destination_state_id" id="final_destination_state_id"
                                            class="form-control" required>
                                            <option value="">Select State</option>
                                        </select>
                                    </div>


                                    <h2>Sender's Details</h2>
                                    <div class="mb-1">
                                        <label class="form-label" for="sender_name">Name:</label>
                                        <input type="text" id="sender_name" class="form-control" name="sender_name"
                                            required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="sender_email">Email:</label>
                                        <input type="email" id="sender_email" class="form-control" name="sender_email"
                                            required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="sender_address">Address:</label>
                                        <input type="text" id="sender_address" class="form-control"
                                            name="sender_address" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="sender_mobile">Mobile:</label>
                                        <input type="text" id="sender_mobile" class="form-control"
                                            name="sender_mobile" required>
                                    </div>

                                    <h2>Receiver's Details</h2>
                                    <div class="mb-1">
                                        <label class="form-label" for="receiver_name">Name:</label>
                                        <input type="text" id="receiver_name" class="form-control"
                                            name="receiver_name" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="receiver_email">Email:</label>
                                        <input type="email" id="receiver_email" class="form-control"
                                            name="receiver_email" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="receiver_address">Address:</label>
                                        <input type="text" id="receiver_address" class="form-control"
                                            name="receiver_address" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="receiver_mobile">Mobile:</label>
                                        <input type="text" id="receiver_mobile" class="form-control"
                                            name="receiver_mobile" required>
                                    </div>

                                    <h2>Shipment Details</h2>
                                    <div class="mb-1" hidden>
                                        <label class="form-label" for="shipment_type">Type of Shipment:</label>
                                        <input type="text" id="shipment_type" class="form-control" readonly
                                            value="parcel" name="shipment_type" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="shipment_content">Content of Shipment:</label>
                                        <input type="text" id="shipment_content" class="form-control"
                                            name="shipment_content" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="quantity">Quantity of Product:</label>
                                        <input type="number" id="quantity" class="form-control" name="quantity"
                                            required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="weight">Weight of Product (kg):</label>
                                        <input type="number" step="0.01" id="weight" class="form-control"
                                            name="weight" required>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="total_charges">Total Charges:</label>
                                        <input type="number" step="0.01" id="total_charges" class="form-control"
                                            name="total_charges" required>
                                    </div>

                                    <h2>Other Information</h2>
                                    <div class="mb-1">
                                        <label class="form-label" for="estimated_delivery_date">Estimated Delivery
                                            Date:</label>
                                        <input type="date" id="estimated_delivery_date" name="estimated_delivery_date"
                                            required>
                                    </div>


                                    <div class="mb-1">
                                        <label for="trip_type">Transport Type</label>
                                        <select name="mode" id="mode" class="form-control" required>
                                            <option value="byair">By Air</option>
                                            <option value="bysea">By Sea</option>
                                            <option value="byroad">By Road</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary data-submit me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </section>
                <!--/ Basic table -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                paging: false,
                ordering: false,
                info: false,
            });
        });
    </script>
    <!-- jQuery (required for DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>


    <script>
        // Populate states based on country selection
        function populateStates(countryId, stateSelectId) {
            if (!countryId) {
                document.getElementById(stateSelectId).innerHTML = '<option value="">Select State</option>';
                return;
            }

            fetch(`tracking/states/${countryId}`)
                .then(response => response.json())
                .then(states => {
                    const stateSelect = document.getElementById(stateSelectId);
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    states.forEach(state => {
                        stateSelect.innerHTML += `<option value="${state.id}">${state.name}</option>`;
                    });
                })
                .catch(error => {
                    console.error('Error fetching states:', error);
                });
        }

        // Toggle fields based on trip type
        document.getElementById('trip_type').addEventListener('change', function() {
            const isNonOneWay = this.value === 'non-one-way';
            document.getElementById('second_origin_field').style.display = isNonOneWay ? 'block' : 'none';
            document.getElementById('second_origin_state_field').style.display = isNonOneWay ? 'block' : 'none';
            document.getElementById('final_destination_field').style.display = 'block';
            document.getElementById('final_destination_state_field').style.display = 'block';

            // Populate states based on selection
            const originCountryId = document.getElementById('origin_country').value;
            const finalDestinationCountryId = document.getElementById('final_destination_country').value;

            populateStates(originCountryId, 'origin_state_id'); // Populate origin state
            populateStates(finalDestinationCountryId,
                'final_destination_state_id'); // Always populate final destination state
            if (isNonOneWay) {
                const secondOriginCountryId = document.getElementById('second_origin_country').value;
                populateStates(secondOriginCountryId,
                    'second_origin_state_id'); // Populate second origin state if applicable
            }
        });

        // Event listeners for country selection changes
        document.getElementById('origin_country').addEventListener('change', function() {
            const originCountryId = this.value;
            populateStates(originCountryId, 'origin_state_id');
        });

        document.getElementById('final_destination_country').addEventListener('change', function() {
            const finalDestinationCountryId = this.value;
            populateStates(finalDestinationCountryId, 'final_destination_state_id');
        });

        document.getElementById('second_origin_country').addEventListener('change', function() {
            const secondOriginCountryId = this.value;
            populateStates(secondOriginCountryId, 'second_origin_state_id');
        });
    </script>

    <script>
        // toastr.options = {
        //     "closeButton": true,
        //     "debug": false,
        //     "newestOnTop": false,
        //     "progressBar": true,
        //     "positionClass": "toast-top-right",
        //     "preventDuplicates": true,
        //     "onclick": null,
        //     "showDuration": "300",
        //     "hideDuration": "1000",
        //     "timeOut": "5000",
        //     "extendedTimeOut": "1000",
        //     "showEasing": "swing",
        //     "hideEasing": "linear",
        //     "showMethod": "fadeIn",
        //     "hideMethod": "fadeOut"
        // };

        // function updateTrackingCode(id) {
        //     // Send AJAX request to update the tracking code status
        //     const button = document.getElementById(`updateButton${id}`);

        //     // Example: you might send a request to your Laravel controller to update the status
        //     fetch(`{{ route('tracking-code.update', '') }}/${id}`, {
        //             method: 'POST',
        //             headers: {
        //                 'Content-Type': 'application/json',
        //                 'X-CSRF-TOKEN': '{{ csrf_token() }}' // Ensure you include CSRF token
        //             },
        //             body: JSON.stringify({
        //                 status: button.innerText === 'Mark as Complete' ? 'complete' : 'pending'
        //             })
        //         })
        //         .then(response => response.json())
        //         .then(data => {
        //             if (data.success) {
        //                 // Update button state based on response
        //                 button.classList.remove('btn-danger', 'btn-success');
        //                 button.classList.add(data.status === 'complete' ? 'btn-success' : 'btn-danger');
        //                 button.innerText = data.status === 'complete' ? 'Completed' : 'Mark as Complete';
        //                 // Show success notification
        //                 toastr.success('Tracking code status updated successfully!');
        //             } else {
        //                 // Handle errors if needed
        //                 toastr.error('Failed to update tracking code status.');
        //             }
        //         })
        //         .catch(error => {
        //             console.error('Error:', error);
        //             toastr.error('An error occurred while updating the status.');
        //         });
        // }
        function updateOrderStatus(id) {
            // Get the selected status from the dropdown
            const select = document.getElementById(`statusSelect${id}`);
            const selectedStatus = select.value;

            // Send AJAX request to update the order status
            fetch(`{{ route('tracking-code.update', '') }}/${id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token
                    },
                    body: JSON.stringify({
                        status: selectedStatus
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success notification
                        toastr.success('Order status updated successfully!');

                        // Optionally, update the select element to show the new status as selected
                        select.value = data.status;
                        // Refresh the page or reload a class only
                        window.location.reload(); // This will reload the entire page
                    } else {
                        // Handle errors if needed
                        toastr.error('Failed to update order status.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    toastr.error('An error occurred while updating the status.');
                });
        }
    </script>
@endpush
