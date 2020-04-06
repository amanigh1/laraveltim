<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.services.index', compact('services'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'description' => 'required|min:4',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);


        // Storing the new item from $request
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->move('images/services/', $fileName);
        $service->image = $fileName;


        $service->save();
        session()->flash('service_created');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'description' => 'required|min:4',
            'image' => 'mimes:jpeg,jpg,png',
        ]);


        // Storing the new item from $request
        $service = Service::findOrFail($service->id);
        $service->name = $request->name;
        $service->description = $request->description;
        if($file = $request->file('image')){
            unlink( public_path( $service->image));
            $extension = $file->getClientOriginalExtension();
        $fileName = time().'.'.$extension;
        $file->move('images/services/', $fileName);
        $service->image = $fileName;
        }




        $service->save();
        session()->flash('service_edited');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        unlink( public_path( $service->image));
        $service->delete();
        session()->flash('service_deleted');
        return redirect()->route('services.index');
    }
}
