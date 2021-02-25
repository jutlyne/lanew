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
              <h4 class="card-title ">Contact</h4>
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
                        Email
                      </th>
                      <th>
                        Subject
                      </th>
                      <th>
                        Content
                      </th>
                      <th>
                        Actions
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($contact as $contacts)
                      @php
                        $id = $contacts->cid;
                        $name = $contacts->fullname;
                        $subject = $contacts->subject;
                        $email = $contacts->email;
                        $content = $contacts->content
                      @endphp
                    <tr>
                      <td>{{$id}}</td>
                      <td>{{$name}}</td>
                      <td>{{$email}}</td>
                      <td>{{$subject}}</td>
                      <td>{{$content}}</td>
                      <td class="text-primary">
                        <a href="{{route('admin.contact.reply', $id)}}" title="" class="btn btn-danger"><i class="fa fa-pencil"></i>Reply</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            <ul class="pagination">
                                {{ $contact->links() }}
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
@stop
