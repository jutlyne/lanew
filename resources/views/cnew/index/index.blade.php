@extends('template.cnew.master')
@section('main-content')
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2" >
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>About Us</span>
                        <h3>A Luxuries Hotel <br>
                            with Nature</h3>
                    </div>
                    <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                        dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                        sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                    <a href="#" class="line-button">Learn More</a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="about_thumb d-flex">
                    <div class="img_1">
                        <img src="{{asset('cnew/img/about/about_1.png')}}" alt="">
                    </div>
                    <div class="img_2">
                        <img src="{{asset('cnew/img/about/about_2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<!-- offers_area_start -->
<!-- <div class="offers_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span>Our Offers</span>
                    <h3>Ongoing Offers</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{asset('cnew/img/offers/1.png')}}" alt="">
                    </div>
                    <h3>Up to 35% savings on Club <br>
                        rooms and Suites</h3>
                    <ul>
                        <li>Luxaries condition</li>
                        <li>3 Adults & 2 Children size</li>
                        <li>Sea view side</li>
                    </ul>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{asset('cnew/img/offers/2.png')}}" alt="">
                    </div>
                    <h3>Up to 35% savings on Club <br>
                        rooms and Suites</h3>
                    <ul>
                        <li>Luxaries condition</li>
                        <li>3 Adults & 2 Children size</li>
                        <li>Sea view side</li>
                    </ul>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
            <div class="col-xl-4 col-md-4">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="{{asset('cnew/img/offers/3.png')}}" alt="">
                    </div>
                    <h3>Up to 35% savings on Club <br>
                        rooms and Suites</h3>
                    <ul>
                        <li>Luxaries condition</li>
                        <li>3 Adults & 2 Children size</li>
                        <li>Sea view side</li>
                    </ul>
                    <a href="#" class="book_now">book now</a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- offers_area_end -->

<!-- video_area_start -->
<div class="video_area video_bg overlay">
    <div class="video_area_inner text-center">
        <span>Montana Sea View</span>
        <h3>Relax and Enjoy your <br>
            Vacation </h3>
        <a href="https://www.youtube.com/watch?v=vLnPwxZdW4Y" class="video_btn popup-video">
            <i class="fa fa-play"></i>
        </a>
    </div>
</div>
<!-- video_area_end -->

<!-- about_area_start -->
<div class="about_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="about_thumb2 d-flex">
                    <div class="img_1">
                        <img src="{{asset('cnew/img/about/1.png')}}" alt="">
                    </div>
                    <div class="img_2">
                        <img src="{{asset('cnew/img/about/2.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>Delicious Food</span>
                        <h3>We Serve Fresh and <br>
                            Delicious Food</h3>
                    </div>
                    <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare
                        dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque
                        sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area_end -->

<!-- features_room_startt -->
<div class="features_room">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span>Featured Rooms</span>
                    <h3>Choose a Better Room</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="rooms_here">
      @foreach($item as $items)
        @php
          $url = 'http://localhost/lanew/storage/app/'.$items->picture;
        @endphp
        <div class="single_rooms">
            <div class="room_thumb">
                <img src="{{$url}}" alt="" width="720" height="450">
                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <span>{{$items->uname}}</span>
                        <h3>{{$items->rname}}</h3>
                    </div>
                    <a href="{{route('cnew.new.detail', $items->rid)}}" class="line-button">book now</a>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
<!-- features_room_end -->
@stop
