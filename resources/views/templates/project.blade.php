@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active">Dự án</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                @foreach($data as $item)
                <div class="box-item-news">
                    <div class="col-xs-12 col-md-3">
                        <a href="{{url('du-an/'.$item->alias.'.html')}}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}"></a>
                    </div>
                    <div class="col-xs-12 col-md-9">
                        <a href="{{url('du-an/'.$item->alias.'.html')}}" title="{{$item->name}}">
                            <p class="name_news">{{$item->name}}</p>                                
                        </a>
                        <div class="des_news">
                            {!! $item->mota !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- <div class="col-xs-12 col-md-3">
                <h3 class="news_hot">Tin nổi bật</h3>
                <div class="list-hot-news">
                    <p><a href="" title="">Fraud, Deceptions, and Downright Lies About Essaysource.com Exposed</a></p>
                    <p><a href="" title="">Fraud, Deceptions, and Downright Lies About Essaysource.com Exposed</a></p>
                    <p><a href="" title="">Fraud, Deceptions, and Downright Lies About Essaysource.com Exposed</a></p>
                    <p><a href="" title="">Fraud, Deceptions, and Downright Lies About Essaysource.com Exposed</a></p>
                    <p><a href="" title="">Fraud, Deceptions, and Downright Lies About Essaysource.com Exposed</a></p>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection