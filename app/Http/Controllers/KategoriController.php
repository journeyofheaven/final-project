<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Barang;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
                    'namaKategori' => 'required',
                ],
                [
                    'namaKategori.required' => 'Nama harus diisi',
                ]);
            $kategori = new Kategori();
            $kategori->namaKategori = $request->namaKategori;
            $kategori->save();
            alert()->success('Sukses','Berhasil Menambah Kategori');
            return redirect('/kategori/create');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        $barang = Barang::all();
        return view('kategori.show', compact('kategori', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
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
            'namaKategori' => 'required',
        ],
        [
            'namaKategori.required' => 'Nama Kategori harus diisi',
        ]);

        $kategori = Kategori::find($id);
        $kategori->namaKategori = $request->namaKategori;
        $kategori->save();
        alert()->success('Sukses','Berhasil Mengubah Kategori');
        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
        alert()->success('Sukses','Berhasil Menghapus Kategori');
            return redirect('/kategori');
    }
}
