<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    Protected $table = "sanpham";

    public function montt(){
    	return $this->belongsTo('App\MonTT','ID_MTT','ID');
    }

    public function nsx(){
    	return $this->belongsTo('App\NSX','ID_NSX','ID');
    }

    public function chitiet_hd(){
    	return $this->hasMany('App\ChiTietHoaDon','ID_SP','ID');
    }
}
