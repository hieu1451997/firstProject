<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NSX extends Model
{
    Protected $table = "nsx";

    // quan he giua bang nsx va bang sanpham
    public function sanpham(){
    	return $this->hasMany('App\SanPham','ID_NSX','ID');
    	// tham so truyen vao la : duong dan den model sanpham,khoa ngoai,khoa chinh cua bang nsx
    	}
}
