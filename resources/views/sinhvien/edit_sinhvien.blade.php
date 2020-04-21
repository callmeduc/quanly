@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Sinh Viên
                        </header>
                            <?php
                            $message=Session::get('message');
                            if($message){
                              echo '<span class ="text-alert">'.$message.'</span>';
                             Session::put('message',null);
                             }

                            ?>  
                        
                        <div class="panel-body">
                                    
                            
                        @foreach($id as $key=>$values)
                            <div class="position-center">
                                <form action="{{URL::to('/update-sinhvien/'.$values->id)}}" method="post" role="form">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã Sinh Viên</label>
                                    <input type="text" name="masv" class="form-control" id="exampleInputEmail1" value="{{$values->masv}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Sinh Viên</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$values->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Sinh</label>
                                    <input type="text" name="birthday" class="form-control" id="exampleInputEmail1" value="{{$values->birthday}}" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa Chỉ</label>
                                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" value="{{$values->address}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$values->email}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$values->phone}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Khoa</label>
                                    <select name="khoa" class="form-control input-sm m-bot15">
                                        @foreach($tblkhoa as $value)
                                        <option value="{{$value->name}}">{{$value->name}}</option>
                                         @endforeach
                                        {{-- <option value="1">ADMIN</option> --}}
                                    </select>
                                </div>
                                <button type="submit" name="add_catagory_product" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                        @endforeach
                        </div>
                    </section>

            </div>
@endsection