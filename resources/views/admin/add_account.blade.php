@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Tài Khoản ADMIN
                        </header>
                            <?php
                            $message=Session::get('message');
                            if($message){
                              echo '<span class ="text-alert">'.$message.'</span>';
                             Session::put('message',null);
                             }

                            ?>  
                        
                        <div class="panel-body">
                            
                        
                            <div class="position-center">
                                <form action="{{URL::to('/save-account')}}" method="post" role="form">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Tài Khoản</label>
                                    <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mật Khẩu</label>
                                    <input type="password" name="admin_password" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="admin_email" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại</label>
                                    <input type="text" name="admin_phone" class="form-control" id="exampleInputEmail1" >
                                </div>
                                {{-- <div class="form-group">
                                	<label for="exampleInputPassword1">Hiển thị </label>
                                    <select name="catagory_product_status" class="form-control input-sm m-bot15">
                                		<option value="0">Thường</option>
                                		<option value="1">ADMIN</option>
                            		</select>
                                </div> --}}
                                <button type="submit" name="add_catagory_product" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection