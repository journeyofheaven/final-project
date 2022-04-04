<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ["namaBarang", "kodeBarang", "satuanBarang",
                            "kategori_id", "supplier_id", "stockBarang"
                        ];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id');
    }

}
