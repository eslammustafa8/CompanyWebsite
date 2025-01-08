<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $subscribers=Subscriber::paginate(4);

       return view('admin.subscribers.index',get_defined_vars());    }

    // public function store(Request $request)
    // {
    //      $data=$request->validated();
    //     Subscriber::create($data);
    //     return redirect()->route('admin.subscribers.index')->with('success',__('keywords.service_added'));
    // }



    public function destroy(Subscriber $subscriber)
    {
       $subscriber->delete();
        return redirect()->route('admin.subscribers.index')->with('success',__('keywords.subscriber_deleted'));
    }
}
