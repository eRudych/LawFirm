<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessagesController extends Controller
{
    function send(Request $request){

      $message=new Messages();
      $message->name=$request->name;
      $message->phone=$request->phone;
      $message->message=$request->message;

      $message->save();

      return redirect()->back();
    }
    
    function show(){
      return view('seemess' , [
        'message' => Messages::orderBy('name','phone','message','created_at')->get()
      ]);
    }
    function remove($id){
        Messages::find($id)-> delete($id);
        return redirect('/MFLQv3ZT');
    }
    
}
