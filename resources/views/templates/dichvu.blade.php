@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                
                <li class="active">Dịch vụ</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate box-contact-home">
    <div class="container">
        <div class="row">
            <div class="box-product-home">
                <div class="col-md-3 left pdr-0 pdl-0">
                    <div class="title-cate"><h4>Danh mục dịch vụ</h4></div>
                    <div class="list-category">
                        <nav class="sidebar-menu">
                            <ul class= collapse" id="menuMobile2">
                                @foreach($cate_pro as $k=>$cateService)
                                <li>
                                    <a href="{{url('dich-vu/'.$cateService->alias)}}">{{$cateService->name}}</a>
                                    <a href="#cate{{$k}}" data-toggle="collapse" class="_arrow-mobile flr"><i class="_icon fa fa-angle-down"></i></a>
                                    <ul class="collapse" id="cate{{$k}}">
                                        @foreach($cateService->newsCate as $data)
                                        <li><a href="{{url('dich-vu/'.$data->alias)}}">{{$data->name}}</a></li>
                                        @endforeach                                        
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>        
                </div>
                <div class="col-md-9 pdl-0 right">
                    <div class="box-cate1">                            
                        <div class="list-item-product">
                            @foreach($services as $item)
                            <div class="col-md-4 col-xs-6 mb-30">
                                <a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}">
                                </a>
                                <p class="name_product"><a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>                                
                                <div class="des_news">
		                            {!! $item->mota !!}
		                        </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection