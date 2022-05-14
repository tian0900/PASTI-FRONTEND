<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class SipalbabController extends Controller
{
    public function index()
    {
        $feedback = Http::get("http://localhost:8080/api/feedbacks");
        // $feedback = DB::table('feedback')
        //     ->join('users', 'feedback.user_id', '=', 'users.user_id')
        //     ->get();
        // $produk = Produk::inRandomOrder()->limit(6)->get();
        $produk = Http::get("http://localhost:8080/api/produks");
      
        return view('index',['feedback' => json_decode($feedback),'produk' => json_decode($produk)]);
    }
}
