@extends('layouts.admin')

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
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">

                        <button type="button" class="btn btn-primary">
                            ← Back
                        </button>
                    </a>
                </div>
            </div>

            <div class="container-fluid">

                <h3 class="mb-4">Tracking Code: <strong>{{ $parcel->code }}</strong></h3>

                <div class="info-card mt-4">
                    <div class="info-title">Shipping History</div>

                    <div class="table-responsive">
                        <table class="table clean-table table-bordered table-striped">
                            <thead class="table-light">
                                <tr>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Date / Time</th>
                                    <th>Remark</th>
                                </tr>
                            </thead>
                            <tbody>

                                {{-- Latest History --}}
                                {{-- @if ($parcel->latestHistory)
                                    <tr class="table-primary">
                                        <td>{{ $parcel->latestHistory->country ?? '-' }}
                                            {{ $parcel->latestHistory->state ?? '' }}</td>
                                        <td>
                                            <span
                                                class="badge
                                    @if (strtolower($parcel->latestHistory->condition) == 'cleared') bg-success
                                    @elseif(str_contains(strtolower($parcel->latestHistory->condition), 'in_transit')) bg-primary
                                    @elseif(strtolower($parcel->latestHistory->condition) == 'delivered') bg-info
                                    @else bg-secondary @endif">
                                                {{ $parcel->latestHistory->condition ?? 'Unknown' }}
                                            </span>
                                        </td>
                                        <td>{{ $parcel->latestHistory->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>Latest recorded status</td>
                                    </tr>
                                    <br/> <hr/>
                                @endif --}}

                                {{-- Full History --}}
                                @forelse($parcel->histories->sortBy('created_at') as $history)
                                    <tr>
                                        <td>{{ $history->country ?? '-' }} {{ $history->state ?? '' }}</td>
                                        <td>
                                            <span
                                                class="badge
                                    @if (strtolower($history->condition) == 'cleared') bg-success
                                    @elseif(str_contains(strtolower($history->condition), 'in_transit')) bg-primary
                                    @elseif(strtolower($history->condition) == 'delivered') bg-info
                                    @else bg-secondary @endif">
                                                {{ $history->condition ?? 'Unknown' }}
                                            </span>
                                        </td>
                                        <td>{{ $history->created_at->format('Y-m-d H:i:s') }}</td>
                                        <td>{{ $history->remark ?? ($history->description ?? ($history->notes ?? 'In good condition')) }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-4">
                                            No tracking history available yet.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
