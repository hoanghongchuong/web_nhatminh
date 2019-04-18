@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active">Giới thiệu</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 left">
                <div class="content-about">
                {!! $about->content !!}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection

