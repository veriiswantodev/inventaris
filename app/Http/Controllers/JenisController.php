<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index(){
        $jenis = Jenis::all();
        return view('jenis/index', compact('jenis'));
    }
    
    public function addjenis(Request $request){
        $jenis = Jenis::create($request->all());
        return redirect('jenis')->with('sukses', 'Data Berhasil disimpan!');
    }
}
