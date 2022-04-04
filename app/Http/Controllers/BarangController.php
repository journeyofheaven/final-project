<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Supplier;
use App\Kategori;
use App\Barang;
use RealRashid\SweetAlert\Facades\Alert;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        $barang = Barang::all();
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        return view('barang.index', compact('kategori', 'supplier', 'barang'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        return view('barang.create', compact('kategori', 'supplier'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            $request->validate
                ([
                    'namaBarang' => 'required',
                    'kodeBarang' => 'required',
                    'kategori_id' => 'required',
                    'supplier_id' => 'required',
                    'satuanBarang' => 'required',
                ],
                [
                    'namaBarang.required' => 'Nama barang harus diisi',
                    'kodeBarang.required' => 'Kode barang harus diisi',
                    'kategori_id.required' => 'Kategori harus diisi',
                    'supplier_id.required' => 'Nama Supplier harus diisi',
                    'satuanBarang.required' => 'Satuan harus diisi',
                ]);

            DB::table('barang')->insert
                ([
                    'namaBarang' => $request['namaBarang'],
                    'kodeBarang' => $request['kodeBarang'],
                    'satuanBarang' => $request['satuanBarang'],
                    'stockBarang' => $request['stockBarang'],
                    'kategori_id' => $request['kategori_id'],
                    'supplier_id' => $request['supplier_id'],
                ]);   
                alert()->success('Sukses','Berhasil Menambahkan Barang');
            return redirect('/barang/create');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        $supplier = Supplier::all();
        $kategori = Kategori::all();
        return view('barang.show', compact('barang', 'supplier', 'kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        $kategori = Kategori::all();
        $supplier = Supplier::all();
        return view('barang.edit', compact('barang', 'kategori', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate
                ([
                    'namaBarang' => 'required',
                    'kodeBarang' => 'required',
                    'kategori_id' => 'required',
                    'supplier_id' => 'required',
                    'satuanBarang' => 'required',
                ],
                [
                    'namaBarang.required' => 'Nama barang harus diisi',
                    'kodeBarang.required' => 'Kode barang harus diisi',
                    'kategori_id.required' => 'Kategori harus diisi',
                    'supplier_id.required' => 'Nama Supplier harus diisi',
                    'satuanBarang.required' => 'Satuan harus diisi',
                ]);
            DB::table('barang')
            ->where('id', $id)
            ->update
                ([
                    'namaBarang' => $request['namaBarang'],
                    'kodeBarang' => $request['kodeBarang'],
                    'satuanBarang' => $request['satuanBarang'],
                    'kategori_id' => $request['kategori_id'],
                    'supplier_id' => $request['supplier_id'],
                ]);
                alert()->success('Sukses','Berhasil Mengubah Barang');
            return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('barang')->where('id', $id)->delete();
        alert()->success('Sukses','Berhasil Menghapus Barang');
            return redirect('/barang');
    }
}
