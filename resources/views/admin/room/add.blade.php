 @extends('template.admin.master')
@section('main-content-admin')

        <!-- /. ROW  -->
        <div class="" style="margin: 200px 50px">
          <div class="">
            <h3 style="color: #d35400; text-align: center">Add Room</h3>
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
                                    <form role="form" method="post" action="{{route('admin.room.add')}}" enctype="multipart/form-data">
                                      @csrf
                                        <div class="form-group">
                                            <label>Name Room</label>
                                            <input type="text" name="tentruyen" class="form-control" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Room Type</label>
                                            <select class="form-control" name="roomtype">
                                              @foreach ($roomtype as $roomtypes)
                                                @php
                                                  $rid = $roomtypes->type_id;
                                                  $rname = $roomtypes->tname;
                                                @endphp
                                                <option value="{{$rid}}">{{$rname}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Price</label>
                                            <select class="form-control" name="uid">
                                              @foreach ($listroom as $listrooms)
                                                @php
                                                  $uid = $listrooms->uid;
                                                  $uname = $listrooms->uname;
                                                @endphp
                                                <option value="{{$uid}}">{{$uname}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Picture</label>
                                            <input type="file" name="hinhanh" class="form-control" value="" style="opacity: 1999; position: relative; z-index: 1" />
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" class="form-control" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label style="margin-bottom: 0px;">Description</label>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="description" rows="3" name="mota"></textarea>
                                        </div>
                                        <div style="text-align: center">
                                        <button type="submit" name="submit" class="btn btn-success btn-md"  style="width: 20%">Add</button>
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
