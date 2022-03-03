<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function berita($id){
        return view('News',['id' => $id]);
    }
}
