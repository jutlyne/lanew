 @extends('template.admin.master')
@section('main-content-admin')
        <!-- /. ROW  -->
        <div class="" style="margin: 200px 50px">
          <div class="">
            <h3 style="color: #d35400; text-align: center">Reply Contact</h3>
          </div>
          <hr />
          @if(Session::has('msg'))
          <script type="text/javascript">
            alert('{{Session::get('msg')}}');
          </script>
          @endif
          <div class="row">
              <div class="col-md-12">
                  <!-- Advanced Tables -->
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="table-responsive">
                              <div class="row">
                                <div class="col-md-12">
                                  @if ($errors->any())
                                      <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->all() as $error)
                                                  <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                      </div>
                                  @endif
                                    <form role="form" method="post" {{route('admin.contact.index')}} enctype="multipart/form-data">
                                      @csrf
                                      @foreach($contact as $contacts)
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" value="{{$contacts->subject}}" disabled class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" value="{{$contacts->email}}" disabled class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                        </div>
                                        <div>
                                        <textarea class="form-control" id="description" rows="3" name="content"></textarea>
                                        </div>
                                      @endforeach
                                        <div style="text-align: center">
                                        <button type="submit" name="submit" class="btn btn-success btn-md"  style="width: 20%">Send</button>
                                        </div>
                                    </form>
                                </div>
                              </div>
                          </div>

                      </div>
                  </div>
                  <!--End Advanced Tables -->
              </div>
          </div>
        </div>
@endsection
