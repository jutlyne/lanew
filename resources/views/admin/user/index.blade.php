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
            <h4 class="card-title ">User</h4>
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('admin.user.add')}}">
                  <i class="material-icons">post_add</i>Add Another User
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
                      Name
                    </th>
                    <th>
                      Username
                    </th>
                    <th>
                      Actionsqweqweqweqweqweqweqweqweq
                    </th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($auser as $ausers)
                  @php
                    $username = $ausers->username;
                    $fullname   = $ausers->fullname;
                    $id = $ausers->id;

                  @endphp
                  <tr>
                    <td>{{$id}}</td>
                    <td>{{$fullname}}</td>
                    <td>{{$username}}</td>
                    <td class="text-primary">
                      <a href="{{route('admin.user.edit', $ausers->id)}}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                      <a href="{{route('admin.user.delete', $ausers->id)}}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                  <div class="col-sm-12">
                      <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                          <ul class="pagination">
                              {{ $auser->links() }}
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
@endsection
