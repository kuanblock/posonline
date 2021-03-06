@extends('default_admin_layout')
@section('title')
  UpdateEmployee | Backend
@endsection
@section('custom-css')

@endsection
@section('breadcrumb')
  <div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
      try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
      <li>
        <i class="ace-icon fa fa-dashboard"></i>
        <a href="{{ url('admin') }}">หน้าหลัก</a>
      </li>
      <li>
        <i class="ace-icon fa fa-male"></i>
        พนักงาน
      </li>
      <li >
          <i class="ace-icon fa fa-table"></i>
        <a href="{{ url('admin/employee/showallemployee') }}">  พนักงานทั้งหมด </a></li>
        <li class="active">
            <i class="ace-icon fa fa-edit"></i>
           แก้ไขพนักงาน </li>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">
      <form class="form-search">
        <span class="input-icon">
          <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
          <i class="ace-icon fa fa-search nav-search-icon"></i>
        </span>
      </form>
    </div><!-- /.nav-search -->
  </div>
@endsection
@section('content')
  <div class="page-header">
    <h1>
      แก้ไขพนักงาน
    </h1>
  </div><!-- /.page-header -->

  <div class="row">
    <div class="col-xs-12">
      <form class="form-horizontal" action="{{ url('admin/employee/updateemp') }}" role="form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{ $employeedata->emp_ID }}">
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ชื่อ-นามสกุล </label>
          <div class="col-sm-9">
            <input type="text" name="fullname"  class="col-xs-10 col-sm-5" value="{{ $employeedata->emp_name }}"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > เลขบัตรประจำตัวประชาน </label>
          <div class="col-sm-9">
            <input type="text" name="cardid"  class="col-xs-10 col-sm-5" value="{{ $employeedata->emp_idcard }}"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > ที่อยู่ </label>
          <div class="col-sm-9">
            <input type="text" name="address"   class="col-xs-10 col-sm-5"  value="{{ $employeedata->emp_address }}"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > เบอร์โทร </label>
          <div class="col-sm-9">
            <input type="text" name="tel"  class="col-xs-10 col-sm-5" value="{{ $employeedata->emp_tel }}"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Line ID </label>
          <div class="col-sm-9">
            <input type="text" name="lineid"  class="col-xs-10 col-sm-5" value="{{ $employeedata->emp_lineid }}"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Email </label>
          <div class="col-sm-9">
            <input type="email" name="email"  class="col-xs-10 col-sm-5" value="{{ $employeedata->emp_email }}"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > รูปภาพ ใหม่</label>
          <div class="col-sm-9">
            <input type="file" name="photo"  class="col-xs-10 col-sm-5" />
          </div>
        </div>
        <hr>

        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Username </label>
          <div class="col-sm-9">
            <input type="text" name="username"  class="col-xs-10 col-sm-5" value="{{ $employeedata->emp_username }}"  />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" > Password </label>
          <div class="col-sm-9">
            <input type="password" name="password"   class="col-xs-10 col-sm-5" />
          </div>
        </div>


        <div class="space-4"></div>



        <div class="clearfix form-actions">
          <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
              <i class="ace-icon fa fa-check bigger-110"></i>
              Save
            </button>

            &nbsp; &nbsp; &nbsp;
            <button class="btn" type="reset">
              <i class="ace-icon fa fa-undo bigger-110"></i>
              Reset
            </button>
          </div>
        </div>





      </form>

    </div>
  </div>
@endsection
@section('custom-js')

@endsection
@section('custom-jscode')

@endsection
