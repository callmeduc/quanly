<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function show_dashboard(){
        $khoa=DB::table('khoa')->count();
        $admin=DB::table('admin')->count();
        $sinhvien=DB::table('sinhvien')->count();
    	// return view('admin.dashboard')->with('khoa'=>$khoa)->with('admin'=>$admin)->with('sinhvien'=>$sinhvien);
        return view('admin.dashboard',['khoa'=>$khoa],['admin'=>$admin])->with('sinhvien',$sinhvien);
        // return view('admin.dashboard',['khoa'=>$khoa],['admin'=>$admin],['sinhvien'=>$sinhvien]);
    }
    public function accessinto(Request $request){
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result=DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        echo '<pre>';
    	print_r($result);
        echo '</pre>';
        if(isset($result)){
            Session::put('admin_name',$result->admin_name);
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('/');
        }
    }
        public function logout(){
            Session::put('admin_name',null);
            Session::put('admin_id',null);
        return Redirect::to('/');
}
}
