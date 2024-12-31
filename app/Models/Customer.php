<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id', 'created_at','updated_at'];
    public function barang_masuk(){
        return $this->hasMany(BarangMasuk::class);
    }

}
