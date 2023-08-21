@extends('homelayout.layout')

@section('title')
    Invoice
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3>Invoice</h3>
                        <div class="text-end">
                            <a href="{{ url()->previous() }}" class="btn btn-primary text-white"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4>Invoice #{{ $booking->id }}</h4>
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <tr>
                                        <th scope="col">Owner</th>
                                        <td>{{ $booking->user->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Vehicle Type</th>
                                        <td>{{ $booking->vehicle_type }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Vehicle</th>
                                        <td>{{ $booking->name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Transmission</th>
                                        <td>{{ $booking->transmission }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">License Plate</th>
                                        <td>{{ $booking->license_plate }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Booking Date</th>
                                        <td>{{ \Carbon\Carbon::parse($booking->date)->format('M d, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Request</th>
                                        <td>
                                            @if ($booking->notes == null)
                                                <p>No Request</p>
                                            @else
                                                <p>{{ $booking->notes }}</p>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Price</th>
                                        <td>Rp {{ number_format($booking->ammount, 0, ',', '.') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col">
                                @if (count($booking->spareparts) > 0)
                                    <table class="table table-bordered">
                                        <tr>
                                            <th scope="col">Sparepart</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                        @foreach ($booking->spareparts as $sparepart)
                                            <tr>
                                                <td>{{ $sparepart->name }}</td>
                                                <td>Rp {{ number_format($sparepart->price, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th scope="col">Total</th>
                                            <td>Rp {{ number_format($priceSparepart, 0, ',', '.') }}</td>
                                        </tr>
                                    </table>
                                @else
                                    <p>No spareparts added to this booking.</p>
                                @endif
                            </div>
                        </div>
                        <h5 class="mt-3">Total</h5>
                        <table class="table table-bordered">
                            <tr>
                                <td scope="col">Service</td>
                                <td>Rp {{ number_format($booking->ammount, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <td scope="col">Sparepart</td>
                                <td>Rp {{ number_format($priceSparepart, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th scope="col">Total</th>
                                <th>Rp {{ number_format($total_price, 0, ',', '.') }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
