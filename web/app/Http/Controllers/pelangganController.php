<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pelangganController extends Controller
{
    public function index()
    {
    	$pelanggan = $this->datapelanggan();
    	return view ('pelanggan/index', compact('pelanggan'));
    }

    public function datapelanggan()
    {
    	$pelanggan = ['ina', 'ani', 'ita', 'aji'];
   		return $pelanggan;
    }
}
