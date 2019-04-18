<?php
    $setting = Cache::get('setting');
?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo-footer">
                    <a href="{{asset('upload/hinhanh/'.$setting->photo_footer)}}" title=""></a>
                </div>
                <h3>{{$setting->company}}</h3>
                <p>Địa chỉ: {{$setting->address}}</p>
                <p>Thời gian: 8h30 - 18h30 kể cả thứ 7 và chủ nhật</p>
            </div>
            <div class="col-md-4">
                <h3>Thông tin liên hệ</h3>
                <p>Điện thoại: {{$setting->phone}}</p>
                <p>Hotline: {{$setting->hotline}}</p>
                <p>Email: {{$setting->email}}</p>
                <p>website: {{$setting->website}}</p>
                <p class="social">
                    <a href="{{$setting->facebook}}" target="_blank" title=""><i class="fa fa-facebook"></i></a>
                    <a href="{{$setting->youtube}}" title="" target="_blank"><i class="fa fa-youtube"></i></a>
                    <a href="{{$setting->instagram}}" title="" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="{{$setting->twitter}}" title="" target="_blank"><i class="fa fa-twitter"></i></a>
                </p>
            </div>
            <div class="col-md-4">
                <h3>Điền thông tin để nhận tư vấn</h3>
                <div class="form-contact">
                    <form action="{{route('postContact')}}" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <p><input type="text" required="" name="name" class="" placeholder="Họ tên*"></p>
                        <p><input type="text" required="" name="phone" class="" placeholder="Số điện thoại*"></p>
                        <p><input type="email" class="" name="email" required="" placeholder="Email*"></p>
                        <p><textarea name="content" required="" placeholder="Nội dung*"></textarea></p>
                        <p class="btn-submit"><button type="submit">Gửi</button></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bottom-footer">
    <p>Designed by hungthinhads.com</p>
</div>