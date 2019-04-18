@extends('index')
@section('content')
<?php 
    $setting = Cache::get('setting');
   
?>
@include('templates.layout.slider')
<div class="box-content">
    <div class="container">
        <div class="row">
            <h3 class="title-home"><span>Dự án tiêu biểu</span></h3>
            <div class="list-product-item">
                <div class="owl-carousel owl-theme owl-carousel-product">                        
                    @foreach($projects as $project)
                    <div class="item">
                        <a href="{{url('du-an/'.$project->alias.'.html')}}" title="{{$project->name}}"><img src="{{asset('upload/news/'.$project->photo)}}" alt="{{$project->name}}">
                        </a>
                        <p class="name-project"><a href="{{url('du-an/'.$project->alias.'.html')}}" class="" title="{{$project->name}}">{{$project->name}}</a></p>
                        <div class="description-proejct">
                            {!! $project->mota !!}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-content box-service-home">
    <div class="container">
        <div class="row">
            <h3 class="title-home"><span>Dịch vụ của chúng tôi</span></h3>
            @for($i=0; $i< count($services_home); $i++)
            
            <div class="box-service">
            	@if($i%2 == 0)
                <div class="col-md-6">
                    <a href="{{url('dich-vu/'.$services_home[$i]->alias)}}" title="{{$services_home[$i]->name}}"><img src="{{asset('upload/news/'.$services_home[$i]->photo)}}" alt=""></a>
                </div>
                <div class="col-md-6 mt-20-mobile">
                    <p class="title-service"><a href="{{url('dich-vu/'.$services_home[$i]->alias)}}" title="{{$services_home[$i]->name}}">{{$services_home[$i]->name}}</a></p>
                    <div class="des-serive">
                        {!! $services_home[$i]->mota !!}
                    </div>
                    <div class="xemthem"><a href="{{url('dich-vu/'.$services_home[$i]->alias)}}" title="{{$services_home[$i]->name}}" class="read-more">Xem thêm</a></div>
                </div>
                @else                
                <div class="col-md-6 mt-20-mobile">
                    <p class="title-service"><a href="{{url('dich-vu/'.$services_home[$i]->alias)}}" title="{{$services_home[$i]->name}}">{{$services_home[$i]->name}}</a></p>
                    <div class="des-serive">
                        {!! $services_home[$i]->mota !!}
                    </div>
                    <div class="xemthem"><a href="{{url('dich-vu/'.$services_home[$i]->alias)}}" title="{{$services_home[$i]->name}}" class="read-more">Xem thêm</a></div>
                </div>
                <div class="col-md-6">
                    <a href="{{url('dich-vu/'.$services_home[$i]->alias)}}" title="{{$services_home[$i]->name}}"><img src="{{asset('upload/news/'.$services_home[$i]->photo)}}" alt=""></a>
                </div>
                 @endif
            </div>
            @endfor
        </div>
    </div>
</div>
<div class="box-content">
    <div class="container">
        <div class="row">
            <h3 class="title-home"><span>Sản phẩm</span></h3>
            @foreach($products as $product)
            <div class="col-md-4 box-product">
                <a href="{{url('san-pham/'.$product->alias.'.html')}}" title="{{$product->name}}"><img src="{{asset('upload/product/'.$product->photo)}}" alt="{{$product->name}}"></a>
                <p class="name-project"><a href="{{url('san-pham/'.$product->alias.'.html')}}" class="" title="{{$product->name}}">{{$product->name}}</a></p>
                <div class="des-product">
                    {!! $product->mota !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="box-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <p class="title-video">Tin tức & sự kiện</p>
                <div class="list-news-home">
                    <!-- <div class="owl-carousel owl-theme owl-carousel-event">                        
                        <div class="item">
                            <a href="" title=""><img src="images/duan1.jpg" alt="">
                            </a>
                            <p class="name-project"><a href="" class="Dự án 1" title="">Dự án 1</a></p>                            
                            <div class="description-proejct">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.
                            </div>
                        </div>
                        
                    </div> -->
                    <div id="carousel-id2" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        	@foreach($news as $k=>$item)
                            <li data-target="#carousel-id2" data-slide-to="{{$k}}" class="@if($k==0) active @endif"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($news as $k=>$item)
                            <div class="item @if($k==0) active @endif">
                                <div class="left-news">
                                    <img src="{{asset('upload/news/'.$item->photo)}}">
                                </div>
                                <div class="right-news">
                                    <p class="name-news"><a href="{{url('tin-tuc/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                                    <div class="des-news fix-des">
                                        {!! $item->mota !!}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- <a class="left carousel-control" href="#carousel-id2" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                        <a class="right carousel-control" href="#carousel-id2" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <p class="title-video">Video</p>
                <div class="box-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/58HH7pO6JAA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <p class="name-video">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            </div>
        </div>
    </div>
</div>
@endsection
