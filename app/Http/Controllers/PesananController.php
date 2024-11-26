<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function home(){
        $pesanan = Pesanan::all();
        $pesanancount = Pesanan::count();
        $menu = Menu::orderBy('created_at','desc')->get();
        $menucount = Menu::count();
        return view('home',['pesanan'=>$pesanan, 'pesanancount'=>$pesanancount, 'menu'=>$menu, 'menucount'=>$menucount]);
    }

    public function addpesanan(){
        $menu = Menu::all();
        return view('addpesanan',['menu'=>$menu]);
    }

    public function storepesanan(Request $request){

        $data = $request->validate([
            'nama_pemesan' => 'required',
            'pesanan' => 'required', 
            'total_harga' => 'required',
        ]); 
        Pesanan::create($data); 
    
        return redirect(route('addpesanan'));
    }

    public function deletepesanan(Pesanan $pesanan){
        $pesanan->delete();
        return redirect(route('home'));
    }
}
