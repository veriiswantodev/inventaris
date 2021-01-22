<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use Illuminate\Http\Request;

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
    
    public function deletejenis($id){
        $jenis = Jenis::find($id)->delete();
        return redirect('jenis')->with('sukses', 'Data Berhasil dihapus');
    }
    
    public function edit($id, Jenis $jenis){
        $jenis = Jenis::find($id);
        return view('jenis.edit', compact('jenis'));
    }
    
    public function update(Request $request, $id){
        $jenis = Jenis::find($id);
        $jenis->update($request->all());
        
        return redirect('jenis')->with('sukses', 'Data Berhasil diedit');
    }
}
