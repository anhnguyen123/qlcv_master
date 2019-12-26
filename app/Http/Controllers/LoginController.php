<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Pages;
class LoginController extends Controller
{
    public function getDangNhap(){
        return view('Auth.login');
    }
    public function postDangNhap(Request $request){
    	$email= $request['email'];
    	$password= $request['password'];
    	//đoạn này login theo ID cố định
    	// $user = User::find(3);
    	// Auth::login($user);
    	// return view('thanhcong',['user'=>Auth::user()]);


    	//đoạn này login theo form người dùng
    	if(Auth::attempt(['email'=>$email,'password'=>$password])){
           // return view('pages.index',['user'=>Auth::user()]);
            $pages = Pages::all();
            //return redirect('pages/index')->with('thongbao','Đã thêm thành công');
            return view('pages/index', ['pages' => $pages]);
    	}
    	else
    	{
    	 return view('dangnhap',['error'=>'Đăng nhập thất bại']);
    	}
    }
    public function dangxuat(){
    	Auth::logout();
    	return view('Auth.login');
    }
}
