<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PostController extends Controller
{
    //
    public function index(){
        $posts = Http::get("http://localhost:8080/api/produks");
        
        return $posts;
    }
}
