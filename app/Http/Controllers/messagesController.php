<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'email' => 'required'

        ]);
        return $request->input('firstName');
    }
}
