<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Feedback;
use Illuminate\Support\Facades\DB;
class SipalbabController extends Controller
{
    public function index(){
            $feedback = DB::table('feedback')
            ->join('users', 'feedback.user_id','=','users.user_id')
            ->get();
        $produk = Produk::inRandomOrder()->limit(6)->get();
        return view('index',compact('feedback','produk'));
    }
}
