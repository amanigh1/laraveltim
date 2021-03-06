<?php

namespace App\Http\Controllers;

use App\Order;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('store','service_form');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service_form(Service $service)
    {
        $services = Service::all();

        return view('service_form', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:120',
            'email' => 'required|email',
            'mobile' => 'required|numeric|min:10'
        ]);



        $order = Order::create($request->all());

        if($order){
            $data = ['id'=>$order->id, 'service'=>$order->service,
                'date'=>$order->created_at->format('d/m/Y'),
                'name'=>$order->name,
                'email'=>$order->email,
                'mobile'=>$order->mobile];

            Mail::send('emails.order',$data , function ($m){
                $m->from('amanighanem11@gmail.com', 'Tim project');
                $m->to('amanighanem11@gmail.com', 'tim tim person')->subject('طلب جديد');
            });

            session()->flash('order_received', $order->name );
            session()->flash('order_id', $order->id);
            return redirect('/');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {


        return view('admin.orders.show', compact('order'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {

        $order->delete();
        session()->flash('order_deleted');
        return redirect()->route('orders.index');
    }
}
