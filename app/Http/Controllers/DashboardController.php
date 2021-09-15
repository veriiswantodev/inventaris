<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Tempat;

class DashboardController extends Controller
{
    public function index(){

        $barang = Barang::all();
        $tempat = Tempat::all();
        return view('dashboard.index', compact('barang', 'tempat'));
    }
}
