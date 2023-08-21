<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        /* Set global font family */
        body {
            font-family: Arial, sans-serif;
        }

        /* Style for invoice header */
        .invoice-header {
            margin-bottom: 20px;
        }

        .invoice-header h1 {
            font-size: 36px;
            margin-bottom: 5px;
        }

        .invoice-header p {
            font-size: 18px;
            margin: 0;
        }

        /* Style for booking information table */
        .booking-info {
            border-collapse: collapse;
            margin-bottom: 20px;
            width: 100%;
        }

        .booking-info th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .booking-info td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        /* Style for spareparts table */
        .spareparts-info {
            border-collapse: collapse;
            width: 100%;
        }

        .spareparts-info th {
            background-color: #f2f2f2;
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .spareparts-info td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="invoice-header">
        <h1>Invoice</h1>
        <p>Invoice number: {{ $booking->id }}</p>
    </div>

    <!-- Display booking information -->
    <table class="booking-info">
        <tr>
            <th>Owner</th>
            <td>{{ $booking->user->fullname }}</td>
        </tr>
        <tr>
            <th>Vehicle Type</th>
            <td>{{ $booking->vehicle_type }}</td>
        </tr>
        <tr>
            <th>Vehicle</th>
            <td>{{ $booking->name }}</td>
        </tr>
        <tr>
            <th>Transmission</th>
            <td>{{ $booking->transmission }}</td>
        </tr>
        <tr>
            <th>Licence Plate</th>
            <td>{{ $booking->license_plate }}</td>
        </tr>
        <tr>
            <th>Service Type</th>
            <td>{{ $booking->service_type }}</td>
        </tr>
        @if ($booking->notes != null)
            <tr>
                <th>Note</th>
                <td>{{ $booking->notes }}</td>
            </tr>
        @else
            <tr>
                <th>Note</th>
                <td>No Request</td>
            </tr>
        @endif
        <tr>
            <th>Date</th>
            <td>{{ \Carbon\Carbon::parse($booking->date)->format('M d, Y') }}</td>
        </tr>
        <tr>
            <th>Price Service</th>
            <td>Rp {{ number_format(($booking->ammount - $priceSparepart), 0, ',', '.') }}</td>
        </tr>
    </table>

    <!-- Display spareparts information -->
    <h3>Spareparts</h3>
    @if (count($booking->spareparts) > 0)
        <table class="booking-info">
            <tr>
                <th>Sparepart Name</th>
                <th>Price</th>
            </tr>
            @foreach ($booking->spareparts as $sparepart)
                <tr>
                    <td>{{ $sparepart->name }}</td>
                    <td>Rp {{ number_format($sparepart->price, 0, ',', '.') }}</td>
                </tr>
            @endforeach
            <tr>
                <th>Total Price</th>
                <td>Rp {{ number_format($priceSparepart, 0, ',', '.') }}</td>
            </tr>
        </table>
    @else
        <p>No spareparts added to this booking.</p>
    @endif

    <!-- Display total price -->
    <h3>Total Price</h3>
    <table class="booking-info">
        <tr>
            <td>Price Service</td>
            <td>Rp {{ number_format(($booking->ammount - $priceSparepart), 0, ',', '.') }}</td>
        </tr>
        <tr>
            <td>Price Sparepart</td>
            <td>Rp {{ number_format($priceSparepart, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Total Price</th>
            <th>Rp {{ number_format($total_price, 0, ',', '.') }}</th>
        </tr>
    </table>
</body>

</html>
