@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhật Tài Khoản ADMIN
                        </header>
                            <?php
                            $message=Session::get('message');
                            if($message){
                              echo '<span class ="text-alert">'.$message.'</span>';
                             Session::put('message',null);
                             }

                            ?>  
                        
                        <div class="panel-body">
                                    
                            
                        @foreach($admin_id as $key=>$value)
                            <div class="position-center">
                                <form action="{{URL::to('/update-account/'.$value->admin_id)}}" method="post" role="form">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Tài Khoản</label>
                                    <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" value="{{$value->admin_name}}" >
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Mật Khẩu</label>
                                    <input type="password" name="admin_password" class="form-control" id="exampleInputEmail1" value="{{$value->admin_password}}" >
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="admin_email" class="form-control" id="exampleInputEmail1" value="{{$value->admin_email}}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại</label>
                                    <input type="text" name="admin_phone" class="form-control" id="exampleInputEmail1" value="{{$value->admin_phone}}" >
                                </div>
                                <button type="submit" name="add_catagory_product" class="btn btn-info">Cập nhật</button>
                            </form>
                            </div>
                        @endforeach
                        </div>
                    </section>

            </div>
@endsection