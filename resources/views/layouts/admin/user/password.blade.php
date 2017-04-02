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
                                                <input type="submit" name="btnUpdate" value="Cập nhật mật khẩu" onclick="" id="" title="Cập nhật mật khẩu" class="btn btn-default btn-update" />      
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
                                Đổi mật khẩu
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tabContent" role="tabpanel" class="tab-pane fade active in">
                            <div class="form-horizontal">
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Mật khẩu cũ</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="old" type="password" maxlength="50" size="45" id="" tabindex="2" class="form-control" value=""/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Mật khẩu mới</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="password" type="password" maxlength="50" size="45" id="" tabindex="2" class="form-control" value=""/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="settingrow form-group">
                                    <label for="" class="settinglabel control-label col-sm-3">Nhập lại mật khẩu mới</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input name="password_confirmation" type="password" maxlength="50" size="45" id="" tabindex="2" class="form-control" value=""/>
                                            <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                        </div>
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