
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

        <style>
            input[readonly], textarea{

                background: white! important;
                border: none;
            }

            span{
                padding-left: 20px;
                text-align: left;
            }
        </style>

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img src="{{asset('teacher_images/' . $teacher->image)}}"
                     class="profile-user-img img-responsive img-circle">

              <h3 class="profile-username text-center">{{$teacher->first_name}} {{$teacher->last_name}}</h3>

              <p class="text-muted text-center">Teacher</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Teacher TimeTable</a></li>
              <li><a href="#timeline" data-toggle="tab">Full Detail</a></li>
              <!--<li><a href="#settings" data-toggle="tab">Settings</a></li>-->
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Full Name</label>

                            <div class="col-sm-10">
                            <input type="email" value="{{$teacher->first_name}} {{$teacher->last_name}}" readonly class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-3">
                                    @if($teacher->gender == 0)
                                        <span class="badge badge-pill badge-success">Male</span>
                                    @else
                                        <span class="badge  badge-pill badge-danger">Female</span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-3">
                                    @if($teacher->status == 0)
                                        <span class="badge badge-pill badge-success">Single</span>
                                    @else
                                        <span class="badge badge-pill badge-danger">Married</span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Date Of Birth</label>

                            <div class="col-sm-10">
                            <input type="text" value="{{date("d-m-Y", strtotime($teacher->dob))}}" class="form-control" id="inputName" placeholder="Name" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Phone</label>

                            <div class="col-sm-10">
                                <input type="text" value="{{$teacher->phone}}" class="form-control" id="inputName" placeholder="Name" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Address</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputName" placeholder="Name" style="text-align: left" readonly>
                                    {{$teacher->address}}
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Nationality</label>

                            <div class="col-sm-10">
                            <input type="text" value="{{$teacher->nationality}}" class="form-control" id="inputName" placeholder="Name" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Passport Number</label>

                            <div class="col-sm-10">
                            <input type="text" value="{{$teacher->passport}}" class="form-control" id="inputName" placeholder="Name" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Date Registered</label>

                            <div class="col-sm-10">
                            <input type="text" value="{{date("d-m-Y", strtotime($teacher->dateregistered))}}" class="form-control" id="inputName" placeholder="Name" readonly>
                            </div>
                        </div>
                    </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
