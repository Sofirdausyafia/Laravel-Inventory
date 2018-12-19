<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class UserController extends Controller
{
    public function indexu()
    {
    	$data['barang'] = \App\Barang::all();
    	return view('User.dashboard')->with($data);
    }
}
