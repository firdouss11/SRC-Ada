<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $guarded = ['id', 'created_at','updated_at'];
    public function barang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
