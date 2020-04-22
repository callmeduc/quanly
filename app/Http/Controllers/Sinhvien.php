<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;

session_start();

class Sinhvien extends Controller
{
    public function add_sinhvien()
    {
        $tblkhoa=DB::table('khoa')->get();
        return view('sinhvien.add_sinhvien',['tblkhoa'=>$tblkhoa]);
    }
    public function save_sinhvien(Request $request)
    {
        $data=array();
        $data['masv']=$request->name;
        $data['name']=$request->name;
        $data['birthday']=$request->birthday;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['khoa']=$request->khoa;
        $result=DB::table('sinhvien')->insert($data);
     //    echo '<pre>';
        // print_r($result);
     //    echo '</pre>';
        Session::put('message','Thêm thành công');
        return Redirect::to('/add-sinhvien');
    }
    public function all_sinhvien()
    {
        $all_account=DB::table('sinhvien')->get();
        // return view('admin.all_account')->with('all_account',$all_account);
        return view('sinhvien.all_sinhvien',['all_account'=>$all_account]);

    }
    public function delete_sinhvien($id){
        DB::table('sinhvien')->where('id',$id)->delete();
        Session::put('message',' Xóa danh mục sản phẩm thành công ');
        return Redirect::to('/all-sinhvien');
    }
    public function edit_sinhvien($id)
    {
        $id=DB::table('sinhvien')->where('id',$id)->get();
        $tblkhoa=DB::table('khoa')->get();
        // return view('sinhvien.add_sinhvien',['tblkhoa'=>$tblkhoa]);
        // return view('sinhvien.edit_sinhvien')->with('id',$id);
        return view('sinhvien.edit_sinhvien',['tblkhoa'=>$tblkhoa],['id'=>$id]);

    }
    public function update_sinhvien(Request $request,$id)
    {
        $data=array();
        $data['masv']=$request->masv;
        $data['name']=$request->name;
        $data['birthday']=$request->birthday;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['khoa']=$request->khoa;
        $result=DB::table('sinhvien')->where('id',$id)->update($data);
     //    echo '<pre>';
        // print_r($result);
     //    echo '</pre>';
        Session::put('message','Cập nhật thành công');
        return Redirect::to('/all-sinhvien');
        // echo 'anh';
    }
    public function search(Request $request)
    {
        $keyword_search=$request->keyword;
        $keyword=DB::table('sinhvien')->where('name','like','%'.$keyword_search.'%')->get();
        return view('sinhvien.search_sinhvien',['keyword'=>$keyword]);
    }

}
