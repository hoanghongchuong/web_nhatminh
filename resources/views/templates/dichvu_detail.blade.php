@extends('index')
@section('content')

<div class="content-home-cate">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div class="crumb">
                    <a href="{{url('')}}">Trang chủ | </a><a href="{{url('dich-vu')}}">Dịch vụ | </a> <a href="javascipt:;" title="">{{$data->name}}</a>
                </div>
                <div class="name_detail">{{$data->name}}</div>
                <!-- <div class="description">Trở thành một trong những xu hướng nhà phố được nhiều gia chủ ưa chuộng, phong cách thiết kế mở có khả năng tối đa hoa mọi chức năng của không gian sống</div> -->
            </div>
            <div class="col-xs-12 col-md-9">
                <div class="content_detail">
                    {!! $data->content !!}
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <h3>Bài viết liên quan</h3>
            <div class="owl-carousel owl-carousel-slider owl-carousel-product detail_item_product owl-theme">
                @foreach($posts as $post)
                <div class="item">
                    <a href="{{url('dich-vu/'.$post->alias.'.html')}}" title="{{$post->name}}">
                        <img src="{{asset('upload/news/'.$post->photo)}}" alt="{{$post->name}}">
                    </a>
                    
                    <div class="footer-cate">
                        <p class="name_product"><a href="{{url('dich-vu/'.$post->alias.'.html')}}" title="{{$post->name}}">{{$post->name}}</a></p>
                        <div class="mota">                            
                            {!! $post->mota !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
</div>
@endsection