<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tempat;

class TempatController extends Controller
{
    public function index(){
        $tempat = Tempat::all();
        return view('tempat.index', compact('tempat'));
    }

    public function add(Request $request){
        $tempat = new Tempat;
        $tempat = Tempat::create($request->all());
        $tempat->save();

        return redirect('tempat');
    }

    public function edit(Request $request, $id){
        if($request->isMethod('post')){
            $item = $request->all();

            // dd($item);
            Tempat::where(['id' => $id])->update(['nama'=>$item['nama']]);
            return redirect()->back();
        }
    }

    public function delete($id){
        $tempat = Tempat::find($id);
        $tempat->delete();
        return redirect('/tempat');
    }
}
