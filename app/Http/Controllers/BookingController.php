<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Sparepart;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $service_type)
    {
        $credentials = $request->validate([
            'vehicle' => 'required',
        ]);
        if ($credentials) {
            $booking = new Booking([
                'id_user' => Auth::user()->id,
                'service_type' => $service_type,
                'name' => $request->get('vehicle'),
                'vehicle_type' => $request->get('vehicle_type'),
                'transmission' => $request->get('transmission'),
                'license_plate' => $request->get('license_plate'),
                'date' => $request->get('date'),
                'notes' => $request->get('notes'),
                'ammount' => $request->get('package'),
                'status' => 'pending'
            ]);
            $booking->save();
            return redirect('/')->with('success', 'Booking saved!');
        }else{
            return redirect('/')->with('error', 'Please Add Vehicle First!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'statusEdit' => 'required'
        ]);
        $booking = Booking::find($id);
        if ($request->get('statusEdit') == '1') {
            $booking->status = 'stand_by';
        } else if ($request->get('statusEdit') == '2') {
            $booking->status = 'on_process';
        } else if ($request->get('statusEdit') == '3') {
            $booking->status = 'done';
        }
        $booking->save();
        return redirect('/home/orderlist')->with('success', 'Booking updated!');
    }

    public function updateSparepart(Request $request, $sparepart)
    {
        $request->validate([
            'sparepart_id' => 'required',
            'booking_id' => 'required',
        ]);
        // dd($request->get('sparepart_id'));

        if (!empty($request->get('sparepart_id'))) {
            $booking = Booking::findOrfail($request->get('booking_id'));
            $sparepart_ids = $request->get('sparepart_id');

            foreach ($sparepart_ids as $sparepart_id) {
                $sparepart = Sparepart::findOrFail($sparepart_id);
                $total_price = intval($booking->ammount) + intval($sparepart->price);
                $booking->ammount = $total_price;
                $booking->spareparts_id = $sparepart_id;
                $booking->save();
                $booking->spareparts()->attach($sparepart_id);
            }
            return redirect('/home/orderlist')->with('success', 'Spareparts have been added to the booking.');
        } else {
            return redirect('/home/orderlist')->with('error', 'Please select at least one sparepart.');
        }
    }

    public function invoice(Booking $booking)
    {
        $booking = Booking::with(['user', 'spareparts'])->findOrFail($booking->id);
        $priceSparepart = 0;
        foreach ($booking->spareparts as $sparepart) {
            $priceSparepart += $sparepart->price;
        }
        $total_price = $booking->ammount;
        $pdf = PDF::loadView('homepage_view.detail_invoice', compact('booking', 'total_price', 'priceSparepart'));
        $pdf->setPaper('a4', 'potrait');
        return $pdf->stream('invoice.pdf');
    }

    public function invoiceUser($id)
    {
        $booking = Booking::with(['user', 'spareparts'])->findOrFail($id);
        $priceSparepart = 0;
        foreach ($booking->spareparts as $sparepart) {
            $priceSparepart += $sparepart->price;
        }
        $total_price = $booking->ammount + $priceSparepart;
        return view('homepage_view.detail_invoiceUser', compact('booking', 'total_price', 'priceSparepart'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
        $booking->delete();
        return redirect('/home/orderlist')->with('success', 'Booking deleted!');
    }
}
