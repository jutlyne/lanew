 @extends('template.admin.master')
@section('main-content-admin')


                <!-- /. ROW  -->
                <div class="" style="margin: 200px 50px">
                  <div class="">
                    <h3 style="color: #d35400; text-align: center">Edit Room</h3>
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
                                          @php
                                            $typeid = $room->type_id;
                                            $utilid = $room->uid;
                                            $pic    = $room->picture;
                                            $Urlpic = 'http://localhost/lanew/storage/app/'.$pic;
                                          @endphp
                                            <form role="form" method="post" action="{{route('admin.room.edit', $room->rid)}}" enctype="multipart/form-data">
                                              @csrf
                                                <div class="form-group">
                                                    <label>Name Room</label>
                                                    <input type="text" name="tentruyen" class="form-control" value="{{$room->rname}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Room Type</label>
                                                    <select class="form-control" name="roomtype">
                                                      @foreach ($roomtype as $roomtypes)
                                                        @php
                                                          $tid = $roomtypes->type_id;
                                                          $tname = $roomtypes->tname;
                                                          $selected = '';
                                                        @endphp
                                                        @if($typeid == $tid)
                                                          @php
                                                            $selected = 'selected="selected"';
                                                          @endphp
                                                        @endif
                                                        <option value="{{$tid}}" {{$selected}}>{{$tname}}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <select class="form-control" name="util">
                                                      @foreach ($listroom as $listrooms)
                                                        @php
                                                          $uid = $listrooms->uid;
                                                          $uname = $listrooms->uname;
                                                          $selected = '';
                                                        @endphp
                                                        @if($utilid == $uid)
                                                          @php
                                                            $selected = 'selected="selected"';
                                                          @endphp
                                                        @endif
                                                        <option value="{{$uid}}" {{$selected}}>{{$uname}}</option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Picture</label>
                                                    <input type="file" name="hinhanh" class="form-control" value="" style="opacity: 1999; position: relative; z-index: 1" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Subject</label>
                                                    <input type="text" name="subject" class="form-control" value="{{$room->subject}}" />
                                                </div>
                                                <div class="form-group">
                                                    <label style="margin-bottom: 0px;">Description</label>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" id="description" rows="3" name="mota">{{$room->description}}</textarea>
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
