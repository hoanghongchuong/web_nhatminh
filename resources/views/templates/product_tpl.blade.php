@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active">Sản phẩm</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate box-contact-home">
    <div class="container">
        <div class="row">
            <div class="box-product-home">
                <div class="col-md-3 left pdr-0 pdl-0">
                    <div class="title-cate"><h4>Danh mục sản phẩm</h4></div>
                    <div class="list-category">
                        <nav class="sidebar-menu">
                            <ul class= collapse" id="menuMobile2">
                                @foreach($cate_pro as $k=>$cateProduct)
                                <li>
                                    <a href="{{url('san-pham/'.$cateProduct->alias)}}">{{$cateProduct->name}}</a>
                                    <!-- <a href="#cate{{$k}}" data-toggle="collapse" class="_arrow-mobile flr"><i class="_icon fa fa-angle-down"></i></a>
                                    <ul class="collapse" id="cate{$k}}">
                                        @foreach($cateProduct->cateChild as $data)
                                        <li><a href="{{url('san-pham/'.$data->alias)}}">{{$data->name}}</a></li>
                                        @endforeach
                                        
                                    </ul> -->
                                </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>        
                </div>
                <div class="col-md-9 pdl-0 right">
                    <div class="box-cate1">                            
                        <div class="list-item-product">
                            @foreach($products as $item)
                            <div class="col-md-4 col-xs-6 mb-30">
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
                        <div class="paginations">{!! $products->links() !!}</div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection