<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;

class RuangController extends Controller
{
    public function index(){
        $ruang = Ruang::all();
        return view('ruang/index', compact('ruang'));
    }
    
    public function addruang(Request $request){
        $ruang = Ruang::create($request->all());
        return redirect('ruang')->with('sukses', 'Data Berhasil disimpan!');
    }
    
    public function deleteruang($id){
        $ruang = Ruang::find($id)->delete();
        return redirect('ruang')->with('sukses', 'Data Berhasil dihapus');
    }
    
    public function edit($id, ruang $ruang){
        $ruang = Ruang::find($id);
        return view('ruang.edit', compact('ruang'));
    }
    
    public function update(Request $request, $id){
        $ruang = Ruang::find($id);
        $ruang->update($request->all());
        
        return redirect('ruang')->with('sukses', 'Data Berhasil diedit');
    }
}
