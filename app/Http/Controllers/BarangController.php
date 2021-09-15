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

    public function edit(Request $request, $id){
        if($request->isMethod('post')){
            $item = $request->all();

            // dd($item);

            Barang::where(['id' => $id])->update(['nama'=>$item['nama'],'merk'=>$item['merk']]);
            return redirect()->back();
        }
    }
}
