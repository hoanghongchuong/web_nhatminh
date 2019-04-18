@extends('admin.master')
@section('content')
@section('controller','Danh mục ')
@section('action','List')
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1>
    @yield('controller')
    <small>@yield('action')</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="javascript:">@yield('controller')</a></li>
    <li class="active">@yield('action')</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        @if (session('status'))
        <div class="box-header">
            <h3 class="box-title alert_thongbao text-green">{{ session('status') }}</h3>
        </div>
        @endif
        <!--<div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>-->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <!-- <th style="width: 20px;"><input type="checkbox" name="chonhet" class="minimal" id="chonhet" /></th> -->
                <th class="text-center with_dieuhuong">Stt</th>
                
                <th>Tên</th>
                <th>Loại</th>
                <th>Giá trị</th>
                <th>Ngày hết hạn</th>
                <!-- <th class="text-center with_dieuhuong">Hiển thị</th> -->
                <th class="text-center with_dieuhuong">Sửa</th>
                <th class="text-center with_dieuhuong">Xóa</th>
              </tr>
            </thead>
            <tbody>
              @foreach($campaigns as $key=>$item)
              <tr>
                <!-- <td><input type="checkbox" name="chon" id="chon" value="" class="chon" /></td> -->
                <td>{{$key+1}}</td>
                <td>{{$item->campaign_name}}</td>
                <td>
                    <?php
                        if($item->campaign_type == 1){
                          echo "Trừ tiền";
                        }
                        
                        if($item->campaign_type == 2){
                          echo "Trừ %";
                        }

                    ?>

                </td>
                <td>{{$item->campaign_value}}</td>
                <td>{{$item->campaign_expired}}</td>
                               
                
                
                <td class="text-center with_dieuhuong">
                  <i class="fa fa-pencil fa-fw"></i><a href="admin/campaign/create/{{$item->id}}">Edit</a>
                </td>
                <td class="text-center">
                  <i class="fa fa-trash-o fa-fw"></i><a onClick="if(!confirm('Xác nhận xóa')) return false;" href="{{asset('admin/campaign/delete/'.$item->id)}}">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div><!-- /.box-body -->
        <div class="box-footer col-md-12">
          <div class="col-md-6">
            <input type="button" onclick="javascript:window.location='admin/campaign/create'" value="Thêm" class="btn btn-primary" />
            <!-- <button type="button" id="xoahet" class="btn btn-success">Xóa</button> -->
            <input type="button" value="Thoát" onclick="javascript:window.location='admin'" class="btn btn-danger" />

          </div>
        </div>
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
@endsection()
