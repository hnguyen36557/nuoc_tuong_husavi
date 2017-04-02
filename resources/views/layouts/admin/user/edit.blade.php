@extends('layouts.admin.master')
@section('controller','User')
@section('action','List') 
@section('content_admin')
<div id="page-content-wrapper" class="col-lg-10 col-md-9 col-sm-8">
    <div id="ctl00_divCenter" class="center-nomargins cmszone">
        <section class="breadcb"><div class="col-md-12"><ol class="breadcrumb"><li><a href=''><i class="fa fa-dashboard"></i> Dashboard</a></li><li class='active'><a href=''>Danh sách thành viên</a></li></ol></div></section>
        
        <form enctype="multipart/form-data" method="post" action="" >
		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="admin-content col-md-12">
            <div class="row titlepage">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-4">
                                            <h1>Cập nhật thông tin thành viên</h1>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="pull-right btngroups">
                                                <input type="submit" name="btnUpdate" value="Cập nhật tài khoản" onclick="" id="" title="Cập nhật tài khoản" class="btn btn-default btn-update" />
                                                <a href="{{ url('admin/user/password') }}" class="btn btn-default btn-update" style="background: #f90">Đổi mật khẩu</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-12">
                    @include('layouts.admin.blocks.error')
                </div>
            </div>
            <div id="ctl00_mainContent_pnlNews" class="workplace" >
                <div id="divtabs" class="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tabContent" aria-controls="tabContent"
                               role="tab" data-toggle="tab">
                                Thông tin đăng nhập
                            </a>
                        </li>
                        <li class="newsedit-metatab">
                            <a href="#tabMeta" aria-controls="tabMeta" role="tab"
                               data-toggle="tab">
                                Thông tin cá nhân
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tabContent" role="tabpanel" class="tab-pane fade active in">
                            <div class="form-horizontal">
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Username</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_txtUsername" type="text" maxlength="100" size="45" tabindex="1" class="form-control" value="{!! old('user_txtUsername',isset($data) ? $data['username'] : null ) !!}" readonly="true" />
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            <span id="" class="fa fa-exclamation-triangle" style="display:none;">Tên không được để trống.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Mật khẩu</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_txtPassword" type="password" maxlength="50" size="45" id="" tabindex="2" class="form-control" value="{!! old('user_txtPassword',isset($data) ? $data['password'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_txtHandphone" type="text" maxlength="50" size="45" id="" tabindex="5" class="form-control" value="{!! old('user_txtHandphone',isset($data) ? $data['handphone'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                        <span id="ctl00_mainContent_rfvLoginName" class="fa fa-exclamation-triangle" style="display:none;">Tài khoản không được để trống.</span>
                                    </div>
                                </div>
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Email</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_txtEmail" type="text" maxlength="100" size="45" id="" tabindex="6" class="form-control" value="{!! old('user_txtEmail',isset($data) ? $data['email'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                        <span id="ctl00_mainContent_regexEmail" class="fa fa-exclamation-triangle" style="display:none;">Phải sử dụng địa chỉ email hợp lệ.</span>
                                        <span id="ctl00_mainContent_rfvEmail" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập email.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                                
                               
                              
                        


                        <div id="tabMeta" role="tabpanel" class="tab-pane fade">
                            <div class="form-horizontal">
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Tên đầy đủ</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_txtFullName" type="text" maxlength="50" size="45" id="" tabindex="4" class="form-control" value="{!! old('user_txtFullName',isset($data) ? $data['fullname'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                        <span id="" class="fa fa-exclamation-triangle" style="display:none;">Tài khoản không được để trống.</span>
                                    </div>
                                </div>
                                
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_txtAddress" type="text" maxlength="100" size="45" id="" tabindex="7" class="form-control" value="{!! old('user_txtAddress',isset($data) ? $data['address'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                        <span id="ctl00_mainContent_regexEmail" class="fa fa-exclamation-triangle" style="display:none;">Phải sử dụng địa chỉ email hợp lệ.</span>
                                        <span id="ctl00_mainContent_rfvEmail" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập email.</span>
                                    </div>
                                </div>
								<div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Ngày sinh nhật</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="user_dateBirthday" type="date" maxlength="50" size="45" id="" tabindex="8" class="form-control" value="{!! old('user_dateBirthday',isset($data) ? $data['birthday'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                        <span id="ctl00_mainContent_rfvLoginName" class="fa fa-exclamation-triangle" style="display:none;">Tài khoản không được để trống.</span>
                                    </div>
                                </div>
								<div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Hình ảnh đại diện</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        @if( $data['featured_image'] != '')
                                        	<img width="100px" height="70px" src="{!! url('public/upload/user/'.$data['featured_image']) !!}" />
                                        	<label>{{ $data['featured_image'] }}</label>
                                        @endif
                                            <input name="user_txtFeaturedImage" type="file" maxlength="50" size="45" id="" tabindex="9" class="form-control"  value="{!! old('user_txtFeaturedImage',isset($data) ? $data['featured_image'] : null ) !!}"/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                        <span id="ctl00_mainContent_rfvLoginName" class="fa fa-exclamation-triangle" style="display:none;">Tài khoản không được để trống.</span>
                                    </div>
                                </div>
	                        </div>
                        </div>
                    </div>
                </div>
            
        </form>
    </div>
</div>
@endsection()