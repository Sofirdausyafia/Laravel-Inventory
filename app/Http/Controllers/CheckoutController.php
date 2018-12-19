<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checkout;

class CheckoutController extends Controller
{
    public function createp()
    {
    	return view('Checkout.form');
    }

    public function createa()
    {
    	return view('Pembayaran.form');
    }

    public function savep(Request $r)
    {
    	$checkout = new Checkout;
        $checkout->id_pembeli = $r->input('id_pembeli');
    	$checkout->kode_barang = $r->input('kode_barang');
    	$checkout->nama_barang = $r->input('nama_barang');
    	$checkout->jumlah_barang = $r->input('jumlah_barang');
    	$checkout->harga_barang = $r->input('harga_barang');
    	$checkout->alamat_pengiriman = $r->input('alamat_pengiriman');
    	$checkout->save();

    	return redirect(url('pembayaran/create'));
    }

    public function detailp($id = 0)
    {
    	
    }
}
