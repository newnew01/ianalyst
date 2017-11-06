<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Textile;

class TextilesController extends Controller
{
    public function index()
    {
        $textiles = Textile::all();
        return view('textile-list',compact('textiles'));
    }

    public function show($id)
    {
        $textile = Textile::find($id);
        return view('textile',compact('textile'));
    }
}
