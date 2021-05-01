<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $feedback = new Feedback();
       
        $feedback->deskripsi = $request->input('deskripsi');
        
        $produks->save();
        
        return redirect('daftarmenu');
    }
}
