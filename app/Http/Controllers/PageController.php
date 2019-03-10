<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\SanPham;
use App\NSX;
use App\MonTT;
use App\User;
use Hash;
use Auth;

use App\Cart; 
use Session;
use App\KhachHang;
use App\HoaDon;
use App\ChiTietHoaDon;
class PageController extends Controller
{
    public function getIndex(){
    	$slide = Slide::all();
    	//return view('Page.trangchu',['slide'=>$slide]);
    	$new_product = SanPham::where('danh_dau',1)->paginate(3);
    	//dd($new_product);
    	$sp_mua_nhieu = SanPham::where('danh_dau',2)->paginate(3);

    	$sp_hiem=SanPham::where('danh_dau',3)->paginate(3);
    	$sp=SanPham::all();
    	return view('Page.trangchu',compact('slide','new_product','sp_mua_nhieu','sp_hiem','sp'));
    }

    public function getLoaiSp($type){
        $sp_montt=SanPham::where('ID_MTT',$type)->paginate(15);

        $ns_x=NSX::all();

        $montt=Montt::where('ID',$type)->first();
    	return view('Page.loai_sanpham',compact('sp_montt','ns_x','montt'));
    }

    public function getChitiet(Request $req){
        $sanpham=SanPham::where('ID',$req->id)->first();

        $nsx=NSX::where('ID',$req->id)->first();
    	return view('Page.chitiet_sanpham',compact('sanpham','nsx'));
    }

    public function getCheckout(){
       
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
        
            return view('Page.checkout',['product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]); 
   

    }

    public function postCheckout(Request $req){
        $cart = Session::get('cart');

        $khachhang = new KhachHang;
        $khachhang->HoTen = $req->HoTen;
        $khachhang->email = $req->email;
        $khachhang->Diachi = $req->Diachi;
        $khachhang->sdt = $req->sdt;
        $khachhang->save();

        $hoadon = new HoaDon;
        $hoadon->ID_KH = $khachhang->id;
        $hoadon->NgayDatHang = date('Y-m-d');
        $hoadon->TongTien = $cart->totalPrice;
        $hoadon->save();

        foreach ($cart->items as $key => $value) {
            $chitiethoadon = new ChiTietHoaDon;
            $chitiethoadon->ID_HD = $hoadon->id;
            $chitiethoadon->ID_SP = $key;
            $chitiethoadon->SoLuong = $value['qty'];
            $chitiethoadon->DonGia = $value['price']/$value['qty'];
            $chitiethoadon->save();
        }

        Session::forget('cart');
        return redirect()->back();
    }

    public function getSearch(Request $req){
        $product = SanPham::where('TenSp','like','%'.$req->key.'%')->paginate(6);
        return view('Page.search',compact('product'));
    }

    public function getLienhe(){
        return view('Page.lienhe');
    }
    public function getGioithieu(){
        return view('Page.gioithieu');
    }

    public function getAddtoCart(Request $req,$id){
        $product = SanPham::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();

    }
    
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }


    public function postSingin(Request $req){
        $this->validate($req,
                [
                    'email'=>'required|email|unique:users,email',
                    'password'=>'required|min:6|max:20',
                    'name'=>'required',
                    'ConfirmPassword'=>'required|same:password'
                ],
                [
                    'email.required'=>'Vui lòng nhập email',
                    'email.email'=>'không đúng định dạng email',
                    'email.unique'=>'Email đã có người sử dụng',
                    'password.required'=>'vui lòng nhập password',
                    'ConfirmPassword'=>'Mật khẩu không giống nhau',
                    'password.min'=>'mật khẩu ít nhất 6 kí tự'
                ]);
        $user= new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function getLogin(){
        return view('Page.dangnhap');
    }

    public function postLogin(Request $req){
        $mon_tt=MonTT::all();
       
        $cre = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($cre))
        {
             return view('Admin.admin',compact('mon_tt'));
        }
        else return view('Page.lienhe');
         
    }
    
    
}
