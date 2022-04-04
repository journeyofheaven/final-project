<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Inventori;
use App\Supplier;

class TambahStockController extends Controller
{
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $supplier = Supplier::all();
        return view ('inventori.tambah', compact('barang'));
    }
    public function update(Request $request, $id)
    {
        $request->validate
                ([
                    'stockBarang' => 'required',
                ],
                [
                    'stockBarang.required' => 'Jumlah penambahan stock barang harus diisi',
                ]);
                $barang = Barang::find($id);
                $var1 = $request->stockBarang;
                $var2 = $barang->stockBarang;
                $tambah = $var1 + $var2;
                $barang->stockBarang = $tambah;
                $barang->save();
                alert()->success('Sukses','Berhasil Menambah Stock Barang');
                return redirect('/inventori');
    }
}
