<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function addkategori(){
        return view('/kategori/addkategori');
    }

    public function storekategori(Request $request){
        $data = $request->validate([
            'namakategori' => 'required',
        ]);

        $adddata = Kategori::create($data);
        return redirect(route('kategori.addkategori'));

    }

    public function datakategori(){
        $kategori = Kategori::all();
        return view('/kategori/datakategori',['kategori'=>$kategori]);
    }

    public function editkategori(Kategori $kategori){
        return view('/kategori/editkategori',['kategori'=>$kategori]);
    }

    public function updatekategori(Kategori $kategori, Request $request){
        $data = $request->validate([
            'namakategori' => '',
        ]);

        $kategori->update($data);
        return redirect(route('kategori.datakategori'));
    }

    public function deletekategori(kategori $kategori){
        $kategori->delete();
        return redirect(route('kategori.datakategori'));
    }
}
