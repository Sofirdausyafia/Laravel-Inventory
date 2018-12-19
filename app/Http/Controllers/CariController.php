<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;	
use App\Barang;
use App\Cari;
use Illuminate\Support\Facades\Input;

class CariController extends Controller
{
    public function index()
    {
    	return view('Barang.index');
    }

    public function getName()
    {
    	$input = Input::get('cari');
		$name = \App\Barang::where('nama_barang', 'LIKE', '%'.$input.'%')->get();
		return view('Barang.result', compact('name'));
    }
}
