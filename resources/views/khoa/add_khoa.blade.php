@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Khoa
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
                                <form action="{{URL::to('/save-khoa')}}" method="post" role="form">
                                	{{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Khoa</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày Thành Lập</label>
                                    <input type="text" name="ngaythanhlap" class="form-control" id="exampleInputEmail1" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số Điện Thoại</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" >
                                </div>
                                {{-- <div class="form-group">
                                	<label for="exampleInputPassword1">Hiển thị </label>
                                    <select name="catagory_product_status" class="form-control input-sm m-bot15">
                                		<option value="0">Thường</option>
                                		<option value="1">ADMIN</option>
                            		</select>
                                </div> --}}
                                <button type="submit" name="add_khoa" class="btn btn-info">Thêm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection