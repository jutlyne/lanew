@extends('template.cnew.masterl')
@section('main-content')
@php
  $typeid = $room->type_id;
  $utilid = $room->uid;
  $pic    = $room->picture;
  $rname  = $room->rname;
  $title  = $room->title;
  $Urlpic = 'http://localhost/lanew/storage/app/'.$pic;
@endphp


<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg">
    <h3>{{$rname}}</h3>
</div>
<!-- bradcam_area_end -->
 <!--================Blog Area =================-->
 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{$Urlpic}}" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{$room->title}}</h2>
                   <ul class="blog-info-link mt-3 mb-4">
                     @foreach($listroom as $listrooms)
                      @if($listrooms->uid == $utilid)
                      <li><a href="#"><i class="fa fa-user"></i>{{$listrooms->uname}}</a></li>
                      @endif
                    @endforeach
                      <li><a href="#cmt" id="gotoCMT"><i class="fa fa-comments"></i> {{$count}} Comments</a></li>
                      <li><a href="#"><i class="fa fa-views"></i> {{$room->view}} View</a></li>
                   </ul>
                   <div class="excert">{!!$room->description!!}</div>
                </div>
             </div>
             <div class="navigation-top">
                <div class="d-sm-flex justify-content-between text-center">

                   <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook-f fa-3x"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                   </ul>
                </div>
                <div class="navigation-area">
                   <div class="row">

                   </div>
                </div>
             </div>

             <div class="comments-area" id="cmt" style="border: none">
                <h4>{{$count}} Comments</h4>
                @foreach($comment as $cmt)
                <div class="comment-list">
                   <div class="single-comment justify-content-between d-flex">
                      <div class="user justify-content-between d-flex">

                         <div class="desc">
                            <p class="comment">
                               {{$cmt->comment}}
                            </p>
                            <div class="d-flex justify-content-between">
                               <div class="d-flex align-items-center">
                                  <h5>
                                     <a href="#">{{$cmt->name}}</a>
                                  </h5>
                               </div>
                            </div>
                         </div>

                      </div>
                   </div>
                </div>
                @endforeach
             </div>
             <div class="comment-form">
                <h4>Leave a Reply</h4>
                <form class="form-contact comment_form" method="post" action="#" id="commentForm">
                   <div class="row">
                      <div class="col-12">
                         <div class="form-group">
                           <input type="hidden" name="post_id" value="{{$room->rid}}" />
                            <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                               placeholder="Write Comment"></textarea>
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                         </div>
                      </div>
                      <div class="col-sm-6">
                         <div class="form-group">
                            <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                         </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                   </div>
                </form>
             </div>
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget post_category_widget">
                   <h4 class="widget_title">Category</h4>
                   <ul class="list cat-list">
                     @foreach($roomtype as $roomType)
                      <li>
                         <a href="{{route('cnew.cat.cat', $roomType->type_id)}}" class="d-flex">
                            <p>{{$roomType->tname}}</p>
                         </a>
                      </li>
                    @endforeach
                  </ul>
                </aside>

                <aside class="single_sidebar_widget newsletter_widget">
                   <h4 class="widget_title">Newsletter</h4>
                   <form action="#">
                      <div class="form-group">
                         <input type="email" class="form-control" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                      </div>
                      <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                         type="submit" disabled>Subscribe</button>
                   </form>
                </aside>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!--================ Blog Area end =================-->



<script type="text/javascript">
 $(document).ready(function(){
   $("#email").blur(function(){
     var email = $(this).val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!filter.test(email)){
          alert("Hay nhap dia chi email hop le.\nExample@gmail.com");
          formSend["#email"].focus(); // Focus
          return false;
      }else{
        $("#sb").removeAttr("disabled");
      }
   });
 });
$(document).ready(function()
{
    var submit = $("button[type='submit']");

    // bắt sự kiện click vào nút Login
    submit.click(function()
    {
        // var username = $("input[name='username']").val();
        // var password = $("input[name='password']").val();
        // Lấy tất cả dữ liệu trong form login
        var data = $('form#commentForm').serialize();
        // Sử dụng $.ajax()
        $.ajax({
        type : 'POST', //kiểu post
        url  : '{{route("api.detail.post-comment")}}', //gửi dữ liệu sang trang submit.php
        data : data,
        success :  function(res)
               {

                    if (res.success) {

                      $("#cmt").append(`
                        <div class="comment-list">
                           <div class="single-comment justify-content-between d-flex">
                              <div class="user justify-content-between d-flex">

                                 <div class="desc">
                                    <p class="comment">
                                       ` + $('#comment').val() +`
                                    </p>
                                    <div class="d-flex justify-content-between">
                                       <div class="d-flex align-items-center">
                                          <h5>
                                             <a href="#">` + $('#name').val() + `</a>
                                          </h5>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>
                      `);
                      alert(res.msg);
                      document.getElementById("commentForm").reset();
                    } // check co thanh congh hay ko

               }
        });
        return false;
    });
});
</script>
<script type="text/javascript">

   function loadpage(current_page,row_count,tongsotrang,id){
          $.ajax({
          url: 'loadpage.php',
          type: 'POST',
          cache: false,
          data: {apage:current_page,alimit:row_count,atst:tongsotrang,aid:id},
          success: function(data){
            $("#cmt").html(data);
          },
          error: function (){
            alert('Có lỗi xảy ra');
          }
        });
        return false;

    }

</script>
<style media="screen">
  html {
  scroll-behavior: smooth;
  }
</style>
@stop
