@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Liệt Kê Sinh Viên
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <?php
        $message=Session::get('message');
        if($message){
          echo '<span class ="text-alert">'.$message.'</span>';
          Session::put('message',null);
        }

      ?>


      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Mã Sinh Viên</th>
            <th>Tên Sinh Viên</th>
            <th>Ngày Sinh</th>
            <th>Địa Chỉ</th>
            <th>Email</th>
            <th>Phone</th>
            <th>KHoa</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_account as $key=>$value)
          <tr>
            <td> {{$value->masv}}</td>
            <td> {{$value->name}}</td>
            <td> {{($value->birthday)}}</td>
            <td> {{$value->address}}</td>
            <td> {{$value->email}}</td>
            <td> {{$value->phone}}</td>
            <td> {{$value->khoa}}</td>
            <td>
              <a href="{{URL::to('/edit-sinhvien/'.$value->id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Hi.Bạn có chắc chắn xóa ko ??')" href="{{URL::to('/delete-sinhvien/'.$value->id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection