<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        $getProduk = Produk::all();

        return view('produk', compact ('getProduk'));
    }
    
    public function destroy($id)
    {
        $getProduk = Produk::find($id);
        $getProduk->delete();
        return redirect()->back();
    }
}
