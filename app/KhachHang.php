<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    Protected $table = "khachhang";

    public function hoadon(){
    	return $this->hasMany('App\HoaDon','ID_KH','ID');
    }
}
