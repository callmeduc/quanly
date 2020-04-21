@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Khoa
                        </header>
                            <?php
                            $message=Session::get('message');
                            if($message){
                              echo '<span class ="text-alert">'.$message.'</span>';
                             Session::put('message',null);
                             }

                            ?>  
                        
                        <div class="panel-body">
                                    
                            
                        @foreach($id as $key=>$value)
                            <div class="position-center">
                                <form action="{{URL::to('/update-khoa/'.$value->id)}}" method="post" role="form">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Tài Khoản</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$value->name}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày thành lập</label>
                                    <input type="text" name="ngaythanhlap" class="form-control" id="exampleInputEmail1" value="{{$value->ngaythanhlap}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$value->email}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$value->phone}}" >
                                </div>
                                <button type="submit" name="add_catagory_product" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                        @endforeach
                        </div>
                    </section>

            </div>
@endsection