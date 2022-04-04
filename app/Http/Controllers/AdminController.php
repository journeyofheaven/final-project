<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class AdminController extends Controller
{
    public function index(){
        return view('index');
    }
    public function dashboard(){
        $barang = Barang::all();
        return view('dashboard.index', compact('barang'));
    }
}
