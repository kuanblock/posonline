@extends('default_admin_layout')
@section('title')
  Stock | Backend
@endsection
@section('custom-css')


@endsection
@section('content')

  <div class="page-header">
    <h1>
      รายละเอียดพนักงาน
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <!-- PAGE CONTENT BEGINS -->


      <div >
        <div id="user-profile-2" class="user-profile">
          <div class="tabbable">
            <ul class="nav nav-tabs padding-18">
              <li class="active">
                <a data-toggle="tab" href="#home">
                  <i class="green ace-icon fa fa-user bigger-120"></i>
                  โปรไฟล์
                </a>
              </li>

              <li>
                <a data-toggle="tab" href="#feed">
                  <i class="orange ace-icon fa fa-rss bigger-120"></i>
                  การทำงานประจำวัน
                </a>
              </li>

              <li>
                <a data-toggle="tab" href="#friends">
                  <i class="blue ace-icon fa fa-users bigger-120"></i>
                  กลุ่มงาน
                </a>
              </li>


            </ul>

            <div class="tab-content no-border padding-24">
              <div id="home" class="tab-pane in active">
                <div class="row">
                  <div class="col-xs-12 col-sm-3 center">
                    <span class="profile-picture">
                      <img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="{{ url('image/employee/'.$employeedata->emp_image) }}" />
                    </span>

                    <div class="space space-4"></div>

                  </div><!-- /.col -->

                  <div class="col-xs-12 col-sm-9">


                    <div class="profile-user-info">
                      <div class="profile-info-row">
                        <div class="profile-info-name"> ชื่อ-นามสกุล </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_name }}</span>
                        </div>
                      </div>
                      <div class="profile-info-row">
                        <div class="profile-info-name"> Username </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_username }}</span>
                        </div>
                      </div>

                      <div class="profile-info-row">
                        <div class="profile-info-name"> เลขบัตรประจำตัวประชาชน </div>
                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_idcard }}</span>
                        </div>
                      </div>

                      <div class="profile-info-row">
                        <div class="profile-info-name"> ที่อยู่ </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_address }}</span>
                        </div>
                      </div>

                      <div class="profile-info-row">
                        <div class="profile-info-name"> เบอร์โทร </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_tel }}</span>
                        </div>
                      </div>

                      <div class="profile-info-row">
                        <div class="profile-info-name"> Email </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_email }}</span>
                        </div>
                      </div>
                      <div class="profile-info-row">
                        <div class="profile-info-name"> Line ID  </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->emp_lineid }}</span>
                        </div>
                      </div>

                      <div class="profile-info-row">
                        <div class="profile-info-name"> รับเข้าระบบเมื่อ </div>

                        <div class="profile-info-value">
                          <span>{{ $employeedata->created_at }}</span>
                        </div>
                      </div>






                    </div>




                  </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="space-20"></div>


              </div><!-- /#home -->

              <div id="feed" class="tab-pane">
                <div class="profile-feed row">
                  <div class="col-sm-6">
                    <div class="profile-activity clearfix">
                      <div>
                        <img class="pull-left" alt="Alex Doe's avatar" src="assets/avatars/avatar5.png" />
                        <a class="user" href="#"> Alex Doe </a>
                        changed his profile photo.
                        <a href="#">Take a look</a>

                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          an hour ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <img class="pull-left" alt="Susan Smith's avatar" src="assets/avatars/avatar1.png" />
                        <a class="user" href="#"> Susan Smith </a>

                        is now friends with Alex Doe.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          2 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                        <a class="user" href="#"> Alex Doe </a>
                        joined
                        <a href="#">Country Music</a>

                        group.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          5 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                        <a class="user" href="#"> Alex Doe </a>
                        uploaded a new photo.
                        <a href="#">Take a look</a>

                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          5 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <img class="pull-left" alt="David Palms's avatar" src="assets/avatars/avatar4.png" />
                        <a class="user" href="#"> David Palms </a>

                        left a comment on Alex's wall.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          8 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>
                  </div><!-- /.col -->

                  <div class="col-sm-6">
                    <div class="profile-activity clearfix">
                      <div>
                        <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                        <a class="user" href="#"> Alex Doe </a>
                        published a new blog post.
                        <a href="#">Read now</a>

                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          11 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <img class="pull-left" alt="Alex Doe's avatar" src="assets/avatars/avatar5.png" />
                        <a class="user" href="#"> Alex Doe </a>

                        upgraded his skills.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          12 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                        <a class="user" href="#"> Alex Doe </a>

                        logged in.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          12 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                        <a class="user" href="#"> Alex Doe </a>

                        logged out.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          16 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>

                    <div class="profile-activity clearfix">
                      <div>
                        <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                        <a class="user" href="#"> Alex Doe </a>

                        logged in.
                        <div class="time">
                          <i class="ace-icon fa fa-clock-o bigger-110"></i>
                          16 hours ago
                        </div>
                      </div>

                      <div class="tools action-buttons">
                        <a href="#" class="blue">
                          <i class="ace-icon fa fa-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                          <i class="ace-icon fa fa-times bigger-125"></i>
                        </a>
                      </div>
                    </div>
                  </div><!-- /.col -->
                </div><!-- /.row -->

                <div class="space-12"></div>

                <div class="center">
                  <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                    <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                    <span class="bigger-110">View more activities</span>

                    <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                  </button>
                </div>
              </div><!-- /#feed -->

              <div id="friends" class="tab-pane">
                <div class="profile-users clearfix">
                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar4.png" alt="Bob Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-online"></span>
                            Bob Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">Content Editor</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                            <span class="green"> 20 mins ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar1.png" alt="Rose Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-offline"></span>
                            Rose Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">Graphic Designer</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                            <span class="grey"> 30 min ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar.png" alt="Jim Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-busy"></span>
                            Jim Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">SEO &amp; Advertising</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                            <span class="grey"> 1 hour ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar5.png" alt="Alex Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-idle"></span>
                            Alex Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">Marketing</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                            <span class=""> 40 minutes idle </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar2.png" alt="Phil Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-online"></span>
                            Phil Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">Public Relations</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                            <span class="green"> 2 hours ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar3.png" alt="Susan Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-online"></span>
                            Susan Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">HR Management</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                            <span class="green"> 20 mins ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar1.png" alt="Jennifer Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-offline"></span>
                            Jennifer Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">Graphic Designer</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                            <span class="grey"> 2 hours ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="itemdiv memberdiv">
                    <div class="inline pos-rel">
                      <div class="user">
                        <a href="#">
                          <img src="assets/avatars/avatar3.png" alt="Alexa Doe's avatar" />
                        </a>
                      </div>

                      <div class="body">
                        <div class="name">
                          <a href="#">
                            <span class="user-status status-offline"></span>
                            Alexa Doe
                          </a>
                        </div>
                      </div>

                      <div class="popover">
                        <div class="arrow"></div>

                        <div class="popover-content">
                          <div class="bolder">Accounting</div>

                          <div class="time">
                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                            <span class="grey"> 4 hours ago </span>
                          </div>

                          <div class="hr dotted hr-8"></div>

                          <div class="tools action-buttons">
                            <a href="#">
                              <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                              <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="hr hr10 hr-double"></div>

                <ul class="pager pull-right">
                  <li class="previous disabled">
                    <a href="#">&larr; Prev</a>
                  </li>

                  <li class="next">
                    <a href="#">Next &rarr;</a>
                  </li>
                </ul>
              </div><!-- /#friends -->


            </div>
          </div>
        </div>
      </div>



      <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection
@section('custom-js')


@endsection
