<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id', 'created_at','updated_at'];
    public function barangMasuk(){
        return $this->hasMany(BarangMasuk::class);
    }

    public function barangKeluar(){
        return $this->hasMany(BarangKeluar::class);
    }

}
