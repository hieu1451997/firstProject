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
        return view('Page.checkout');
    }

    public function getLienhe(){
        return view('Page.lienhe');
    }
    public function getGioithieu(){
        return view('Page.gioithieu');
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

    

    public function postLogin(Request $req){
        $this->validate($req,
                [
                    'email'=>'required|email|unique:users,email',
                    'password'=>'required|min:6|max:20'
                    
                ],
                [
                    'email.required'=>'Vui lòng nhập email',
                    'email.email'=>'không đúng định dạng email',
                    'password.min'=>'mật khẩu ít nhất 6 kí tự'
                ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            return view('Admin.admin');
        }
        else return view('Admin.admin');       
    }
    
    
}
