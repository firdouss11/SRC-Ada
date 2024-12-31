<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    protected $guarded = ['id', 'created_at','updated_at'];

    public function barang(){
        return $this->belongsTo(Barang::class, 'barang_id', 'id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

}
