<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Supplier;
use Barryvdh\DomPDF\PDF;

class InventoriController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $Supplier = Supplier::all();
        return view('inventori.index', compact('barang'));
    }
    public function create()
    {
        $barang = Barang::all();
        $supplier = Supplier::all();
        return view('inventori.tambah');
    }
}
