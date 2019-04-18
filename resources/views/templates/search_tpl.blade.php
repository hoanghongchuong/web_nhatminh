@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
    $cateProducts = Cache::get('cateProducts');
?>

<div class="content-box content-box-page">
    <div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="">Tìm kiếm</li>
                <li class="active">{{$search}}</li>
            </ol>
        </div>
    </div>
</div>
    <div class="list-category">
        <div class="container">
            <div class="row">
                <div class="box-cate1">                            
                    <div class="list-item-product">
                        @foreach($data as $item)
                        <div class="col-md-3 col-xs-6 mb-30">
                            <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}">
                            </a>
                            <p class="name_product"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                            
                            <div class="price tac">
                            @if($item->price > 0)                 
                                <span class="price_news">{{number_format($item->price)}} vnđ</span>
                            @else
                                <span class="contact">Liên hệ</span>
                            @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div>
               
            </div>
        </div>
    </div>
</div>


@endsection
