<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Auth;
class ContactController extends Controller
{
    //
    public function index(){
        return view('contact');
    }

    public function store(Request $request){
        $feedback = new Feedback();
        $feedback->user_id =  Auth::user()->user_id;
        $feedback->subjek = $request->input('subjek');
        $feedback->deskripsi = $request->input('deskripsi');
        
        $feedback->save();
        
        return redirect('/');
    }
}
