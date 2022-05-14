<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Feedback;
use Auth;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $feedback = new Feedback();
        $feedback->user_id =  session('user_id');
        $feedback->subjek = $request->input('subjek');
        $feedback->deskripsi = $request->input('deskripsi');

        $feedback->save();
        Http::post('http://localhost:8080/api/feedbacks', [
            'id_customer' => $request->id_customer,
            'subjek' => $request->subjek,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('/');
    }
}
