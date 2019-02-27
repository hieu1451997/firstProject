<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonTT extends Model
{
    Protected $table = "montt";

    // quan he giua bang montt va bang sanpham
    public function sanpham(){
    	return $this->hasMany('App\SanPham','ID_MTT','ID');
    	// tham so truyen vao la : duong dan den model sanpham,khoa ngoai,khoa chinh cua bang montt
    }
}
