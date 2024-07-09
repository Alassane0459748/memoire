<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaireLocaliteController extends Controller
{
    public function index()
    {
        return view('maire.localite');
    }
}
