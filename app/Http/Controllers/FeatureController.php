<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeatureRequest;
use App\Http\Requests\UpdateFeatureRequest;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $features=Feature::paginate(4);

       return view('admin.feature.index',get_defined_vars());    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
              return view('admin.feature.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatureRequest $request)
    {
         $data=$request->validated();
       Feature::create($data);
        return redirect()->route('admin.feature.index')->with('success',__('keywords.feature_added'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
       return view('admin.feature.show',get_defined_vars());
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
        return view('admin.feature.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatureRequest $request, Feature $feature)
    {
         $data=$request->validated();
        $feature->update($data);
        return redirect()->route('admin.feature.index')->with('success',__('keywords.feature_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
       $feature->delete();
        return redirect()->route('admin.feature.index')->with('success',__('keywords.feature_deleted'));
    }
}
