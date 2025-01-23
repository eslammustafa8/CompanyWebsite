<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $services=Testmonial::paginate(4);

       return view('admin.services.index',get_defined_vars());    }

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
    public function store(StoreTestmonialRequest $request)
    {
         $data=$request->validated();
       Testmonial::create($data);
        return redirect()->route('admin.services.index')->with('success',__('keywords.service_added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
       return view('admin.services.show',get_defined_vars());
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
        return view('admin.services.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
         $data=$request->validated();
        $testmonial->update($data);
        return redirect()->route('admin.services.index')->with('success',__('keywords.service_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
       $testmonial->delete();
        return redirect()->route('admin.services.index')->with('success',__('keywords.service_deleted'));
    }
}
