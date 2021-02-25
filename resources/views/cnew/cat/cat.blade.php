@extends('template.cnew.master')
@section('main-content')
<!-- bradcam_area_start -->
@php
  $type = $room->type_id;
@endphp
<div class="bradcam_area breadcam_bg_1">
  @foreach($room as $rooms)
    @if($rooms->type_id == $type)
    <h3>{{$rooms->tname}}</h3>
    @endif
  @endforeach
</div>
<!-- bradcam_area_end -->
<!-- offers_area_start -->
<div class="offers_area padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span>Our Rooms</span>
                </div>
            </div>
        </div>
        <div class="row" style="align-items: center">
          @foreach($roomType as $roomtypes)

            <div class="col-xl-4 col-md-4 room-type" style="padding-bottom: 20px;">
                <div class="single_offers">
                    <a href="{{route('cnew.cat.cat', $roomtypes->type_id)}}" class="book_now"></a>
                </div>
            </div>
          @endforeach
        </div>
    </div>
</div>
<!-- offers_area_end -->

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
      @foreach($room as $rooms)
        @php
          $url = 'http://localhost/lanew/storage/app/'.$rooms->picture;
        @endphp
        <div class="single_rooms">
            <div class="room_thumb">
                <img src="{{$url}}" alt="" width="720" height="450">
                <div class="room_heading d-flex justify-content-between align-items-center">
                    <div class="room_heading_inner">
                        <span>{{$rooms->uname}}</span>
                        <h3>{{$rooms->rname}}</h3>
                    </div>
                    <a href="{{ route('cnew.new.detail', $rooms->rid) }}" class="line-button">book now</a>
                </div>
            </div>
        </div>
      @endforeach
    </div>
</div>
<div class="pagi-items">
  <ul class="pagination">
    {{ $room->links() }}
  </ul>
</div>
<!-- features_room_end -->
<style media="screen">
  .pagi-items, .room_type{
    align-items: center;
    text-align: center;
    color: black;
  }
</style>
@stop
