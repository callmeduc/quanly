@extends('admin_layout')
@section('admin_content')
<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Admin</h4>
					<h3><?php echo $admin; ?></h3>
					<p>Tổng số tài khoản </p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			{{-- <div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Sinh viên</h4>
					<h3>{{$sinhvien}}</h3>
					<p>Tổng số sinh viên</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div> --}}
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Sinh viên</h4>
						<h3>{{$sinhvien}}</h3>
						<p>Tổng số khoa</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>khoa</h4>
						<h3><?php echo $khoa; ?></h3>
						<p>Tổng số khoa</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
        <!-- //market-->
@endsection