<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function add(Request $request){
        $barang = new Barang;
        $barang = Barang::create($request->all());
        $barang->save();

        return redirect('barang');
    }
}
