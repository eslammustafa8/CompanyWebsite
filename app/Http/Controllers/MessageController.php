<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $messages=Message::paginate(4);

       return view('admin.messages.index',get_defined_vars()); 
   }

    /**
     * Show the form for creating a new resource.
     */
   
    public function store(Request $request)
    {
         $data=$request->validated();
       Message::create($data);
        return redirect()->route('admin.messages.index')->with('success',__('keywords.message_added'));
    }


    public function show(Message $message)
    {
       return view('admin.messages.show',get_defined_vars());
    }
    

   
    public function destroy(Message $message)
    {
       $message->delete();
        return redirect()->route('admin.messages.index')->with('success',__('keywords.message_deleted'));
    }
}
