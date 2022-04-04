<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class KurangiStockController extends Controller
{
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view ('inventori.kurang', compact('barang'));
    }
    public function update(Request $request, $id)
    {
        $request->validate
        ([
            'stockBarang' => 'required',
        ],
        [
            'stockBarang.required' => 'Jumlah pengurangan stock barang harus diisi',
        ]);

                $barang = Barang::find($id);
                $var1 = $request->stockBarang;
                $var2 = $barang->stockBarang;
                $kurang = $var2 - $var1;
                $barang->stockBarang = $kurang;
                $barang->save();
                alert()->success('Sukses','Berhasil Mengurangi Stock Barang');
                return redirect('/inventori');
    }
}
