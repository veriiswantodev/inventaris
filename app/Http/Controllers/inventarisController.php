<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inventarisController extends Controller
{
    public function index(){
        return view('inventaris.index');
    }
}
