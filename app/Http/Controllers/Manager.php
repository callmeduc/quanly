<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

session_start();

class Manager extends Controller
{
    public function add_account()
    {
        return view('admin.add_account');
    }
    public function save_account(Request $request)
    {
    	$data=array();
        $data['admin_name']=$request->admin_name;
        $data['admin_password']=md5($request->admin_password);
        $data['admin_email']=$request->admin_email;
        $data['admin_phone']=$request->admin_phone;
        $result=DB::table('admin')->insert($data);
     //    echo '<pre>';
    	// print_r($result);
     //    echo '</pre>';
        Session::put('message','Thêm thành công');
        return Redirect::to('/add-account');
    }
    public function all_account()
    {
    	$all_account=DB::table('admin')->get();
    	// return view('admin.all_account')->with('all_account',$all_account);
    	return view('admin.all_account',['all_account'=>$all_account]);

    }
    public function delete_account($admin_id){
        DB::table('admin')->where('admin_id',$admin_id)->delete();
        Session::put('message',' Xóa danh mục sản phẩm thành công ');
        return Redirect::to('/all-account');
    }
    public function edit_account($admin_id)
    {
    	$admin_id=DB::table('admin')->where('admin_id',$admin_id)->get();
    	return view('admin.edit_account')->with('admin_id',$admin_id);

    }
    public function update_account(Request $request,$admin_id)
    {
    	$data=array();
        $data['admin_name']=$request->admin_name;
        $data['admin_password']=md5($request->admin_password);
        $data['admin_email']=$request->admin_email;
        $data['admin_phone']=$request->admin_phone;
        $result=DB::table('admin')->where('admin_id',$admin_id)->update($data);
     //    echo '<pre>';
    	// print_r($result);
     //    echo '</pre>';
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/all-account');
        // echo 'anh';
    }

}
