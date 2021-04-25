<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Feedback;
class SipalbabController extends Controller
{
    public function index(){
        $feedback = Feedback::all();
        $produk = Produk::inRandomOrder()->limit(6)->get();
        return view('index',compact('feedback','produk'));
    }
}
