@extends('template.admin.master')
@section('main-content-admin')
@if(Session::has('msg'))
<script type="text/javascript">
alert('{{Session::get('msg')}}')
</script>
@endif
<div class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Rooms</h4>
          <ul class="nav nav-tabs" data-tabs="tabs">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.room.add')}}">
                <i class="material-icons">post_add</i>Add Another Room
                <div class="ripple-container"></div>
              </a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <tr>
                  <th>
                    ID
                  </th>
                  <th>
                    Room Name
                  </th>
                  <th>
                    Room Type
                  </th>
                  <th>
                    Price
                  </th>
                  <th>
                    Title
                  </th>
                  <th>
                    Picture
                  </th>
                  <th>
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($listroom as $listrooms)
                  @php
                    $id = $listrooms->rid;
                    $name = $listrooms->rname;
                    $type = $listrooms->tname;
                    $pic = $listrooms->picture;
                    $title = $listrooms->title;
                    $uname = $listrooms->uname;
                    $Urlpic = 'http://localhost/lanew/storage/app/'.$pic;
                  @endphp
                <tr>
                  <td>{{$id}}</td>
                  <td>{{$name}}</td>
                  <td>{{$type}}</td>
                  <td>{{$uname}}</td>
                  <td>{{$title}}</td>
                  <td>
                    <img src="{{$Urlpic}}" alt="" height="80px" width="100px">
                  </td>
                  <td class="text-primary">
                    <a href="{{route('admin.room.edit', $listrooms->rid)}}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                    <a href="javascript:void(0)" data-id="{{$listrooms->rid}}" title="" class="btn btn-danger btn-remove-room-js" data-token="{{ csrf_token() }}"><i class="fa fa-pencil"></i> Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="row">
                <div class="col-sm-12">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            {{ $listroom->links() }}
                        </ul>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
$(document).ready(function() {
  $(".btn-remove-room-js").click(function() {
    self = $(this);
    id = self.data('id');
    tr = self.parents('tr');
    $.ajax({
      url: "room/delete/"+id,
      type: 'get',
      cache: false,
      data: {"id":id},
      success: function(data){
        tr.remove();
        alert(data.success);
      }
    });
  });
})
</script>

@stop
