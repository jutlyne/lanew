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
          <h4 class="card-title ">Room Types</h4>
          <ul class="nav nav-tabs" data-tabs="tabs">
            @if($isAdmin)
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.roomtype.add')}}">
                <i class="material-icons">post_add</i>Add Another Room
                <div class="ripple-container"></div>
              </a>
            </li>
            @endif
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
                    Room Type
                  </th>
                  <th>
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($listroomtype as $listroom)
                   @php
                       $type_id = $listroom->type_id;
                       $name = $listroom->tname;
                   @endphp
                <tr>
                  <td>{{$type_id}}</td>
                  <td>{{$name}}</td>
                  <td class="text-primary">
                    <a href="{{route('admin.roomtype.edit', $listroom->type_id)}}" title="" class="btn btn-primary @if(!$isAdmin) disabled @endif"><i class="fa fa-edit "></i> Sửa</a>
                    <a href="javascript:void(0)" data-id="{{$listroom->type_id}}" title="" class="btn btn-danger @if(!$isAdmin) disabled @endif btn-remove-roomtype-js"><i class="fa fa-pencil"></i> Xóa</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div class="row">
                <div class="col-sm-12">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            {{ $listroomtype->links() }}
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
  $(".btn-remove-roomtype-js").click(function() {
    self = $(this);
    id = self.data('id');
    tr = self.parents('tr');
    $.ajax({
      url: "roomtype/delete/"+id,
      type: 'get',
      cache: false,
      data: {"id":id},
      success: function(data){
        if(data.success){
          tr.remove();
          alert(data.msg);
        }else{
          alert(data.msg);
        }
      };
    });
  });
})
</script>
@endsection
