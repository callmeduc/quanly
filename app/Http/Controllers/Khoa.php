<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

session_start();

class Khoa extends Controller
{
    public function add_khoa()
    {
        return view('khoa.add_khoa');
    }
    public function save_khoa(Request $request)
    {
    	$data=array();
        $data['name']=$request->name;
        $data['ngaythanhlap']=$request->ngaythanhlap;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $result=DB::table('khoa')->insert($data);
     //    echo '<pre>';
    	// print_r($result);
     //    echo '</pre>';
        Session::put('message','Thêm thành công');
        return Redirect::to('/add-khoa');
    }
    public function all_khoa()
    {
    	$all_account=DB::table('khoa')->get();
    	// return view('admin.all_account')->with('all_account',$all_account);
    	return view('khoa.all_khoa',['all_account'=>$all_account]);

    }
    public function delete_khoa($id){
        DB::table('khoa')->where('id',$id)->delete();
        Session::put('message',' Xóa danh mục sản phẩm thành công ');
        return Redirect::to('/all-khoa');
    }
    public function edit_khoa($id)
    {
    	$id=DB::table('khoa')->where('id',$id)->get();
    	return view('khoa.edit_khoa')->with('id',$id);

    }
    public function update_khoa(Request $request,$id)
    {
    	$data=array();
        $data['name']=$request->name;
        $data['ngaythanhlap']=$request->ngaythanhlap;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $result=DB::table('khoa')->where('id',$id)->update($data);
     //    echo '<pre>';
    	// print_r($result);
     //    echo '</pre>';
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/all-khoa');
        // echo 'anh';
    }
    public function search(Request $request)
    {
        $keyword_search=$request->keyword;
        $keyword=DB::table('khoa')->where('name','like','%'.$keyword_search.'%')->get();
        return view('khoa.search_khoa',['keyword'=>$keyword]);
    }

}
