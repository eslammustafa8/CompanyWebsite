<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $services=Service::paginate(4);

       return view('admin.services.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
              return view('admin.services.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        $data=$request->validated();
        Service::create($data);
        return redirect()->route('admin.services.index')->with('success',__('keywords.service_added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
      return view('admin.services.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    { 
  

        $data=$request->validated();
        $service->update($data);
        return redirect()->route('admin.services.index')->with('success',__('keywords.service_updated'));
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success',__('keywords.service_deleted'));
    }
}
