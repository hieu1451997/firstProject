<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDon extends Model
{
    Protected $table = "chitiethoadon";

    public function sanpham(){
    	return $this->belongsTo('App\SanPham','ID_SP','ID');
    }

    public function hoadon(){
    	return $this->belongsTo('App\HoaDon','ID_HD','ID');
    }
}
