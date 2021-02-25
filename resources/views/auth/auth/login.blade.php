@extends('template.admin.master')
@section('main-content-admin')
    <!-- /. ROW  -->
    <div class="" style="margin: 200px 50px">
      <div class="">
        <h3 style="color: #d35400; text-align: center">LOGIN</h3>
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

                                <form role="form" method="post" action="{{route('auth.auth.login')}}">
                                  @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="" />
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" name="fullname" class="form-control" value="" />
                                    </div> -->
                                    <div style="text-align: center">
                                    <button type="submit" name="submit" class="btn btn-success btn-md"  style="width: 20%">Login</button>
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
@stop
