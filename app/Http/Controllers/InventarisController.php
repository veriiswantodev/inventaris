<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventaris;
use Harunci\LaravelIdGenerator\IdGenerator;
use App\Models\Barang;
use App\Models\Tempat;

class InventarisController extends Controller
{
    public function index(){
        $inven = Inventaris::all();
        $barang = Barang::all();
        $tempat = Tempat::all();

        $kode = 'INV';
        $numb = rand(001, 100);
        $comp = 'ANT';
        $mont = date('m');
        $year = date('Y');

        $full = $kode.'/'.$numb.'/'.$comp.'/'.$mont.'/'.$year;
        // dd($full);

        return view('inventaris.index', compact('inven', 'barang', 'tempat', 'full'));
    }
    
}
