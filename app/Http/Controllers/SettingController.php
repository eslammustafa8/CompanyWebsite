<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $setting=Setting::findOrFail(1);

       return view('admin.settings.index',get_defined_vars());
        }


    public function update(UpdateSettingRequest $request, Setting $setting)
    {
         $data=$request->validated();
        $setting->update($data);
        return redirect()->route('admin.settings.index')->with('success',__('keywords.service_updated'));
    }

    /**
     * Remove the specified resource from storage.
     */

}
