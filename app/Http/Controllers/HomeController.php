<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Sparepart;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $vehicle = "";
        $count = 0;
        $history = "";
        if (auth()->user()->role_id == 1) {
            $vehicle = Vehicle::all();
            $count = Vehicle::count();
            $history = Booking::all();
        }else if(auth()->user()->role_id == 2){
            $vehicle = Vehicle::where('id_user', auth()->user()->id)->get();
            $history = Booking::where('id_user', auth()->user()->id)->get();
            if ($vehicle->isEmpty() && $history->isEmpty()) {
                $vehicle = "";
                $count = 0;
                $history = "";
            }else if($vehicle->isEmpty() && !$history->isEmpty()){
                $vehicle = "";
                $count = 0;
                $history = Booking::where('id_user', auth()->user()->id)->get();
            }else if(!$vehicle->isEmpty() && $history->isEmpty()){
                $vehicle = Vehicle::where('id_user', auth()->user()->id)->get();
                $count = Vehicle::where('id_user', auth()->user()->id)->count();
                $history = "";
            }
            else{
                $vehicle = Vehicle::where('id_user', auth()->user()->id)->get();
                $count = Vehicle::where('id_user', auth()->user()->id)->count();
                $history = Booking::where('id_user', auth()->user()->id)->get();
            }
        }
        $countCarRepair = Booking::where('service_type', 'repair')
            ->where('status', 'on_process')
            ->where('vehicle_type', 'car')
            ->count();
        $countCarWash = Booking::where('service_type', 'wash')
            ->where('status', 'on_process')
            ->where('vehicle_type', 'car')
            ->count();
        $countMotorcycleRepair = Booking::where('service_type', 'repair')
            ->where('status', 'on_process')
            ->where('vehicle_type', 'motorcycle')
            ->count();
        $countMotorcycleWash = Booking::where('service_type', 'wash')
            ->where('status', 'on_process')
            ->where('vehicle_type', 'motorcycle')
            ->count();
        return view('homepage_view.home', compact('vehicle', 'count', 'history', 'countCarRepair', 'countCarWash', 'countMotorcycleRepair', 'countMotorcycleWash'));
    }

    public function orderlist()
    {
        $orderlist = Booking::orderBy('status', 'asc')
            ->orderByRaw("FIELD(status, 'stand_by', 'on_process', 'done')")
            ->get();
        $spareparts = Sparepart::all();
        return view('homepage_view.orderlist', compact('orderlist', 'spareparts'));
    }

    public function sparepart()
    {
        $sparepart = Sparepart::all();
        return view('homepage_view.sparepart', compact('sparepart'));
    }

    public function invoice()
    {
        $orderlist = Booking::with('user')->where('status', 'done')->get();
        return view('homepage_view.invoice', compact('orderlist'));
    }

    public function invoiceUser($id)
    {
        $orderlist = Booking::with(['user', 'spareparts'])->where('id_user', $id)->where('status', 'done')->get();
        return view('homepage_view.invoice', compact('orderlist'));
    }

    public function profile($id)
    {
        $user = User::find($id);
        return view('homepage_view.profil', compact('user'));
    }
}
