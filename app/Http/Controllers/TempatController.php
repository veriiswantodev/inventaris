<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempatController extends Controller
{
    public function index(){
        return view('tempat.index');
    }
}
