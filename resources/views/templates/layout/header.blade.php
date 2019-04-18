<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('com','san-pham')->where('status',1)->get();
    $serviceCate = \App\NewsCate::where('com','dich-vu')->where('status',1)->where('parent_id',0)->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row visible-lg visible-md">                
            <div class="col-md-5 col-xs-12 logo">
                <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt=""></a>
            </div>
            <div class="col-md-7 col-xs-12">
                <div class="box-info-hearder">
                    <div class="phone-number">
                        <i class="fa fa-phone"></i>
                        <span>Hotline</span>
                        <p>{{$setting->hotline}}</p>
                    </div>
                    <form id="main-search" method="get" action="{{route('search')}}">
                        <input type="text" name="txtSearch" placeholder="Tìm kiếm...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>            
        </div> 
        <div class="row visible-sm visible-xs">
            <div class="col-xs-6">
                <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt=""></a>                
            </div>
            <div class="col-xs-6">
                <div class="box-info-hearder">
                    <div class="phone-number">
                        <i class="fa fa-phone"></i>
                        <span>Hotline</span>
                        <p>{{$setting->hotline}}</p>
                    </div>                    
                </div>
            </div>
            <div class="col-xs-12">
                <form id="main-search" method="get" action="{{route('search')}}">
                        <input type="text" name="txtSearch" placeholder="Tìm kiếm...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
            </div>
        </div>       
    </div>
</header><!-- /header -->
<div class="menu visible-lg visible-md">         
    <div class="container">
        <ul class="navi">
            <li class="active"><a href="{{url('')}}">Trang chủ</a></li>
            <li>
                <a href="{{url('gioi-thieu')}}">Giới thiệu</a>
                
            </li>
            <li>
                <a href="{{url('san-pham')}}">Sản phẩm
                    <!-- <i class="fa fa-chevron-down"></i> -->
                </a>
                <ul class="vk-menu__child">
                    @foreach($categories as $category)
                    <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                    @endforeach                       
                </ul>
            </li>
            <li>
                <a href="{{url('dich-vu')}}">Dịch vụ</a> 
                <ul class="vk-menu__child">
                    @foreach($serviceCate as $cate)
                    <li>
                        <a href="{{url('dich-vu/'.$cate->alias)}}">{{$cate->name}}</a>
                        <ul class="vk-menu__child">
                            @foreach($cate->newsCate as $cateChild)
                            <li><a href="{{url('dich-vu/'.$cateChild->alias)}}" title="">{{$cateChild->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                                        
                </ul>                           
            </li>
            
            <li><a href="{{url('du-an')}}" title="">Dự án</a></li>
            <li><a href="{{url('tuyen-dung')}}" title="">Tuyển dụng</a></li>
            <li><a href="{{url('lien-he')}}" title="">Liên hệ</a></li>
        </ul> 
    </div>           
</div>
<div class="visible-xs visible-sm menu-mobile">
    <div class="vk-header__search">
        <div class="container">
            
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
            <li>
                <a href="{{url('san-pham')}}">Sản phẩm</a>
                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    @foreach($categories as $category)
                    <li><a href="{{url('san-pham/'.$category->alias)}}">{{$category->name}}</a></li>
                    @endforeach                    
                </ul>
            </li>
            <li>
                <a href="{{url('dich-vu')}}">Dịch vụ</a>
                <a href="#menu1" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse sub-menu-mobile" id="menu1">
                    @foreach($serviceCate as $k=>$cate)
                    <li>
                        <a href="{{url('dich-vu/'.$cate->alias)}}">{{$cate->name}}</a>
                        <a href="#menu1_{{$k}}" data-toggle="collapse" class="_arrow-mobile">
                            <i class="_icon fa fa-angle-down"></i>
                        </a>
                        <ul class="collapse sub-menu-mobile" id="menu1_{{$k}}">
                            @foreach($cate->newsCate as $cateChild)
                            <li><a href="{{url('dich-vu/'.$cateChild->alias)}}" title="">{{$cateChild->name}}</a></li>
                            @endforeach
                            
                        </ul>
                    </li>
                    @endforeach
                    
                </ul>
            </li>
            <li><a href="{{url('du-an')}}">Dự án</a></li>
            <li><a href="{{url('tuyen-dung')}}">Tuyển dụng</a></li>
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
    </nav>
    
</div>