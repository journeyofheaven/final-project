<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Supplier;
use App\Barang;

class SupplierController extends Controller
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
        $supplier = DB::table('supplier')->get();
 
        return view('supplier.index', ['supplier' => $supplier]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
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
                    'namaSupplier' => 'required',
                    'kodeSupplier' => 'required',
                    'catatanSupplier' => 'required',
                ],
                [
                    'namaSupplier.required' => 'Nama Supplier harus diisi',
                    'kodeSupplier.required' => 'Kode Supplier harus diisi',
                    'catatanSupplier.required' => 'Catatan Supplier harus diisi',
                ]);
                $supplier = new Supplier();
                $supplier->namasupplier = $request->namaSupplier;
                $supplier->kodeSupplier = $request->kodeSupplier;
                $supplier->catatanSupplier = $request->catatanSupplier;
                $supplier->save();
                alert()->success('Sukses','Berhasil Menambah Supplier');
            return redirect('/supplier/create');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);
        $barang = Barang::all();
        return view('supplier.show', compact('supplier', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = DB::table('supplier')->where('id', $id)->first();
        return view('supplier.edit', compact('supplier'));
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
                    'namaSupplier' => 'required',
                    'kodeSupplier' => 'required',
                    'catatanSupplier' => 'required',
                ],
                [
                    'namaSupplier.required' => 'Nama Supplier harus diisi',
                    'kodeSupplier.required' => 'Kode Supplier harus diisi',
                    'catatanSupplier.required' => 'Catatan Supplier harus diisi',
                ]);

                $supplier = Supplier::findOrFail($id);
                $supplier->namasupplier = $request->namaSupplier;
                $supplier->kodeSupplier = $request->kodeSupplier;
                $supplier->catatanSupplier = $request->catatanSupplier;
                $supplier->save();
            alert()->success('Sukses','Berhasil Mengubah Supplier');
    return redirect('/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('supplier')->where('id', $id)->delete();
        alert()->success('Sukses','Berhasil Menghapus Supplier');
            return redirect('/supplier');
    }
}