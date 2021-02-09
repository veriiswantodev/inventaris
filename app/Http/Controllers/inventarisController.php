<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;
use App\Models\Ruang;
use App\Models\Inventaris;
use Illuminate\Support\Facades\DB;

class inventarisController extends Controller
{
    public function index(){
        $n = 1;
        $i = DB::table('inventaris')->max('id');
        $number = $i + $n;
        $jenis = Jenis::all();
        $ruang = Ruang::all();
        $dateMonth = date("m");
        $dateYears =  date("Y");
        $inventaris = Inventaris::all();
        return view('inventaris.index', compact('jenis', 'ruang', 'dateMonth', 'dateYears', 'number', 'inventaris'));
    }
    
    public function add(Request $request){
        $inventaris = Inventaris::create($request->all());
        return $inventaris;
        // return redirect('inventaris')->with('sukses', 'Data Berhasil disimpan!');
    }
}
