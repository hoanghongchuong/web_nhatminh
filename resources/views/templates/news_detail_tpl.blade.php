@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="content-home-cate">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div class="crumb">
                    <a href="{{ url('') }}">Trang chủ | </a><a href="{{url('tin-tuc')}}">Tin tức | </a> <a href="javascipt:;" title="">{{$news_detail->name}}</a>
                </div>
                <div class="name_detail">{{$news_detail->name}}</div>
                <div class="description">{!! $news_detail->mota !!}</div>
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="content_detail">
                    {!! $news_detail->content !!}
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <h3>Bài viết liên quan</h3>
            <div class="owl-carousel owl-carousel-slider owl-carousel-product detail_item_product owl-theme">
                @foreach($newsSameCate as $post)
                <div class="item">
                    <a href="{{url('tin-tuc/'.$post->alias.'.html')}}" title="{{$post->name}}">
                        <img src="{{asset('upload/news/'.$post->photo)}}" alt="{{$post->name}}">
                    </a>
                    
                    <div class="footer-cate">
                        <p class="name_product"><a href="{{url('tin-tuc/'.$post->alias.'.html')}}" title="{{$post->name}}">{{$post->name}}</a></p>
                        <div class="mota">                            
                            {!! $post->mota !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection