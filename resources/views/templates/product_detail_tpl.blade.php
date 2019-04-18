@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
   
?>
<div class="breadcrumbx">
    <div class="container">
        <div class="row">
            <ul class="col-md-12">
                <li><a href="{{url('')}}" class="home">Trang chủ ></a></li>
                <li><a href="{{url('san-pham')}}" class="cate">Sản phẩm ></a></li>
                <li><a href="" class="name_detailx">{{$product_detail->name}}</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="box-content-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-detail">
                <div class="album-image">
                    <div class="slider-for">
                        @if(count($album_hinh) > 0)
                        @foreach($album_hinh as $album)
                        <div class="item">
                            <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image"  draggable="false"/>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image"  draggable="false"/>
                        </div>
                        @endif
                        
                    </div>

                    <div class="slider-nav">
                        @if(count($album_hinh) > 0)
                        @foreach($album_hinh as $album)
                        <div class="item">
                            <img src="{{asset('upload/hasp/'.$album->photo)}}" alt="image"  draggable="false"/>
                        </div>
                        @endforeach
                        @else
                        <div class="item">
                            <img src="{{asset('upload/product/'.$product_detail->photo)}}" alt="image"  draggable="false"/>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="single-title">{{$product_detail->name}}</h1>
                <p class="price_detail">Giá: {{number_format($product_detail->price)}} vnđ</p>
                <div class="short-des-product">
                    {!! $product_detail->mota !!}
                </div>
                <div class="hotlinex"><a href="tel:{{$setting->hotline}}" title=""><span style="color: red">HOTLINE:</span> <span style="color: #000; font-weight: bold; font-size: 24px">{{$setting->hotline}}</span></a></div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <h4 class="detail_contentx"><span>Chi tiết</span></h4>
            <div class="content_detail_product">
                {!! $product_detail->content !!}
            </div>
        </div>
        <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
        <h3>Sản phẩm liên quan</h3>
        <div class="owl-carousel owl-carousel-slider owl-carousel-product detail_item_product owl-theme">
            @foreach($productSameCate as $item)
            <div class="item">
                <a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">
                    <img src="{{asset('upload/product/'.$item->photo)}}" alt="{{$item->name}}">
                </a>
                
                <div class="footer-cate">
                    <p class="name_product"><a href="{{url('san-pham/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                    <div class="price tac">
                        @if($item->price > 0)
                        <span class="price_news">{{number_format($item->price)}} vnđ</span>
                        @else
                        <span class="price_news">Liên hệ</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection

