<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function indexp()
    {
    	$data['barang'] = \App\Barang::all();
    	return view('Barang.index')->with($data);
    }

    public function createp()
    {
    	return view('Barang.create');
    }

    public function savep(Request $r)
    {
        $file = $r->file('gambar_barang');
    	$barang = new Barang;

    	$barang->kode_barang = $r->input('kode_barang');
    	$barang->nama_barang = $r->input('nama_barang');
    	$barang->merk_barang = $r->input('merk_barang');
    	$barang->kategori = $r->input('kategori');
    	$barang->sub_kategori = $r->input('sub_kategori');
    	$barang->stok_barang = $r->input('stok_barang');
    	$barang->harga_barang = $r->input('harga_barang');
    	$barang->deskripsi_barang = $r->input('deskripsi_barang');
        $barang->gambar_barang = $file->getClientOriginalName();
        $file->move('gambar_barang/', $file->getClientOriginalName());

    	$barang->save();
        
    	return redirect(url('/dataproduk'));
    }

    public function editp($id)
    {
    	$data['barang'] = Barang::find($id);
    	return view('Barang.edit')->with($data);
    }

    public function updatep(Request $r)
    {
        $file = $r->file('gambar_barang');
    	$data = Barang::find($r->input('id'));

    	$data->kode_barang = $r->input('kode_barang');
    	$data->nama_barang = $r->input('nama_barang');
    	$data->merk_barang = $r->input('merk_barang');
    	$data->kategori = $r->input('kategori');
    	$data->sub_kategori = $r->input('sub_kategori');
    	$data->stok_barang = $r->input('stok_barang');
    	$data->harga_barang = $r->input('harga_barang');
    	$data->deskripsi_barang = $r->input('deskripsi_barang');
        $data->gambar_barang = $file->getClientOriginalName();
        $file->move('gambar_barang/', $file->getClientOriginalName());
    	$data->save();

    	return redirect(url('/dataproduk'));
    }

    public function deletep($id)
    {
    	$barang = Barang::find($id);
    	$barang->delete();

    	return redirect(url('/dataproduk'));
    }

    public function detailp($id = 0)
    {
        $data = array(
            'barang' => Barang::find($id)
        );

        return view('Barang.detail', ['barang' => Barang::whereId($id)->first()]);
    }
}
