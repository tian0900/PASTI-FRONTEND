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

        Http::post('http://localhost:8080/api/feedbacks', [
            'id_customer' =>session('user_id'),
            'subjek' => $request->subjek,
            'deskripsi' => $request->deskripsi,

        ]);

        return redirect('/');
    }
}
