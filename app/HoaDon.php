<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    Protected $table = "hoadon";

    public function chitiet_hd(){
    	return $this->hasMany('App\ChiTietHoaDon','ID_HD','ID');
    }

    public function khachhang(){
    	return $this->belongsTo('App\KhachHang','ID_KH','ID');
    }
}
