<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonTT;
use App\NSX;
use App\SanPham;
use App\KhachHang;
use App\HoaDon;
use App\Slide;
use App\User;
class AdminController extends Controller
{
    public function getAdmin(){
    	$mon_tt=MonTT::all();
    	return view('Admin.admin',compact('mon_tt'));
    }
    public function getNSX(){
    	$ns_x=NSX::all();
    	return view('Admin.danhsach_nsx',compact('ns_x'));
    }
    public function getDSSP(){
    	$s_p=SanPham::all();
    	return view('Admin.danhsach_sanpham',compact('s_p'));
    }

    public function getDSKH(){
    	$k_h=KhachHang::all();
    	return view('Admin.danhsach_khachhang',compact('k_h'));
    }

    public function getDSHD(){
    	$h_d=HoaDon::all();
    	return view('Admin.danhsach_hoadon',compact('h_d'));
    }

    public function getDSSlide(){
    	$slide=Slide::all();
    	return view('Admin.danhsach_slide',compact('slide'));
    }

    public function getDSTK(){
    	$t_k=User::all();
    	return view('Admin.danhsach_taikhoan',compact('t_k'));
    }

    public function getThemMTT(){
    	return view('Admin.them_monthethao');
    }

    public function postThemMTT(Request $request){
    		$this->validate($request,
    			[
    				'TenMonTT'=>'required'
    			],
    			[
    				'TenMonTT.required'=>'Bạn chưa nhập tên môn thể thao',
    			]
    		);
    		$montt=new MonTT;
    		$montt->TenMonTT=$request->TenMonTT;
    		$montt->Mota=$request->Mota;
    		$montt->save();

    		return view('Admin.them_monthethao')->with('thongbao','Thêm thành công');
    }

    public function getThemNSX(){
    	return view('Admin.them_nsx');
    }

    public function postThemNSX(Request $request){
    		$this->validate($request,
    			[
    				'TenNSX'=>'required'
    			],
    			[
    				'TenNSX.required'=>'Bạn chưa nhập tên môn thể thao',
    			]
    		);
    		$nsx=new NSX;
    		$nsx->TenNSX=$request->TenNSX;
    		
    		$nsx->save();

    		return view('Admin.them_nsx')->with('thongbao','Thêm thành công');
    }

    public function getThemSP(){
    	$montt=MonTT::all();
    	$nsx=NSX::all();

    	return view('Admin.them_sanpham',['montt'=>$montt,'nsx'=>$nsx]);
    }
    public function postThemSP(Request $request){
    		$this->validate($request,
    			[
    				'TenSp'=>'required',
    				'DonGia'=>'required',
    				'Gia_KM'=>'required',
    				'Donvi'=>'required',
    				'danh_dau'=>'required'
    			],
    			[
    				'TenSp.required'=>'Bạn chưa nhập tên sản phẩm',
    				'DonGia.required'=>'Bạn chưa nhập đơn giá',
    				'Gia_KM.required'=>'Bạn chưa nhập giá khuyến mãi',
    				'Donvi.required'=>'Bạn chưa nhập đơn vị',
    				'danh_dau.required'=>'Bạn chưa nhập dánh dấu',
    			]
    		);
    		
    		$sanpham= new SanPham;
    		$sanpham->TenSp=$request->TenSp;
    		$sanpham->ID_MTT=$request->MonTT;
    		$sanpham->ID_NSX=$request->NSX;
    		$sanpham->Mota=$request->Mota;
    		$sanpham->DonGia=$request->DonGia;
    		$sanpham->Gia_KM=$request->Gia_KM;
    		if ($request->hasFile('img')) {
    			$file=$request->file('img');
    			$img=$file->getClientOriginalName();
    			$file->move("source/images",$img);
    			$sanpham->img=$img;
    		}
    		$sanpham->Donvi=$request->Donvi;
    		$sanpham->danh_dau=$request->danh_dau;
    		$sanpham->save();

    		return redirect('them-san-pham')->with('thongbao','Thêm thành công');
    }

    public function getSuaMTT($id){

    	$montt= MonTT::find($id);
        return view('Admin.sua_monthethao',['montt'=>$montt]);
    }

    public function postSuaMTT(Request $request,$id){
    	$montt=MonTT::find($id);
        $this->validate($request,
                [
                    'TenMonTT'=>'required'
                ],
                [
                    'TenMonTT.required'=>'Bạn chưa nhập tên môn thể thao',
                ]
            );
        $montt->TenMonTT=$id->TenMonTT;
        $montt->Mota=$request->Mota;
        $montt->save();

        return redirect('sua-mon-the-thao/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoaMTT($id){
        $mon_tt=MonTT::where('ID',$id)->first();
        $mon_tt->delete();

        return view('Admin.admin')->with('thongbao','Xóa thành công');
    }

 }
