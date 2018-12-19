<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;

class PembeliController extends Controller
{
    public function indexp()
    {
    	$data['pembeli'] = \App\Pembeli::all();
    	return view('Pembeli.index')->with($data);
    }

    public function createp()
    {
    	return view('Pembeli.create');
    }

    public function savep(Request $r)
    {
    	$pembeli = new Pembeli;

        $pembeli->id_pembeli = $r->input('id_pembeli');
    	$pembeli->nama_pembeli = $r->input('nama_pembeli');
    	$pembeli->alamat_pembeli = $r->input('alamat_pembeli');
    	$pembeli->no_telepon = $r->input('no_telepon');
    	$pembeli->email = $r->input('email');
    	$pembeli->save();

    	return redirect(url('/datapembeli'));
    }

    public function editp($id)
    {
    	$data['pembeli'] = Pembeli::find($id);
    	return view('Pembeli.edit')->with($data);
    }

    public function updatep(Request $r)
    {
    	$data = Pembeli::find($r->input('id'));

    	$data->nama_pembeli = $r->input('nama_pembeli');
    	$data->alamat_pembeli = $r->input('alamat_pembeli');
    	$data->no_telepon = $r->input('no_telepon');
    	$data->email = $r->input('email');
    	$data->save();

    	return redirect(url('/datapembeli'));
    }

    public function deletep($id)
    {
    	$pembeli = Pembeli::find($id);
    	$pembeli->delete();

	    return redirect(url('/datapembeli'));
    }
}
