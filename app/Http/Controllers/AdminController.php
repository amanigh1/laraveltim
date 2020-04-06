<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $today_orders = Order::whereDay('created_at',  Carbon::now()->day)->count();
        $month_orders = Order::whereMonth('created_at',  Carbon::now()->month)->count();
        $full_orders = Order::count();


        return view('admin.dashboard' , compact('today_orders','month_orders', 'full_orders'));
    }
}
