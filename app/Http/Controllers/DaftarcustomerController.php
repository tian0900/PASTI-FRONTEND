<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DaftarcustomerController extends Controller
{
    //
    public function index(){
        $user = User::where('role',0)->get();
        return view('admin.daftarcustomer',compact('user'));
    }

    public function detail($user_id){
        $user = User::find($user_id);
        return view('admin.detailcustomer',compact('user'));
    }
}
