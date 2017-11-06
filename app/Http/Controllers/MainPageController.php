<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textile;

class MainPageController extends Controller
{
    public function index()
    {
        $textiles = Textile::all();
        return view('index',compact('textiles'));
    }
}
