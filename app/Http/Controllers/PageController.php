<?php

namespace App\Http\Controllers;

use App\Order;
use App\Service;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){

        $services = Service::all();
        return view('index', compact('services'));
    }




}
