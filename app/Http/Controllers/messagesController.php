<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;
class messagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'email' => 'required'

        ]);

        $message = new message;
        $message->FirstName = $request->input('firstName');
        $message->LastName = $request->input('lastName');
        $message->Email = $request->input('email');
        $message->Message = $request->input('message');

        $message->save();

        return redirect('/contact')->with('status','message sent');
    }


    public function getMessages(){

        $messages = message::all();
        return view('messages')->with('messages', $messages);
    }
}
