<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Kategori;

class MenuController extends Controller
{
    public function addmenu(){
        $kategori = Kategori::all();
        return view('/menu/addmenu',['kategori'=>$kategori]);
    }

    public function storemenu(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ]);

        $adddata = Menu::create($data);
        return redirect(route('menu.addmenu'));

    }

    public function datamenu(){
        $menu = Menu::orderBy('created_at','desc')->get();
        return view('/menu/datamenu',['menu'=>$menu]);
    }

    public function editmenu(Menu $menu){
        $kategori = Kategori::all();
        return view('/menu/editmenu',['menu'=>$menu, 'kategori'=>$kategori]);
    }

    public function updatemenu(Menu $menu, Request $request){
        $data = $request->validate([
            'nama' => '',
            'harga' => '',
            'kategori' => '',
            'deskripsi' => '',
            'foto' => '',
        ]);

        $menu->update($data);
        return redirect(route('menu.datamenu'));
    }

    public function deletemenu(Menu $menu){
        $menu->delete();
        return redirect(route('menu.datamenu'));
    }
}
