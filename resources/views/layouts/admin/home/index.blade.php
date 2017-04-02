@extends('layouts.admin.master')
@section('content_admin')
<div id="page-content-wrapper" class="col-lg-10 col-md-9 col-sm-8">
    <div id="ctl00_divCenter" class="center-nomargins cmszone">
    <section class="breadcb"><div class="col-md-12"><ol class="breadcrumb"><li><a href=''><i class="fa fa-dashboard"></i> Dashboard</a></li></ol></div></section>
<div class="admin-content col-md-12">
        <div class="row titlepage">
<div class="col-md-12">
<div class="row">
<div class="col-lg-12">
<div class="page-header">
<div class="row">
<div class="col-md-12">
<div class="col-sm-4">
<h1>Quản trị</h1>
</div>
<div class="col-sm-8">
<div class="pull-right btngroups"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
        <div id="ctl00_mainContent_divAdminMenu" class="workplace">
            <div class="metromini">
                <div class="row">
                    <div class="col-sm-12">
                        
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/SiteSettings.aspx"><i class="fa lnkSiteSettings fa fa-cogs"></i><span>Cấu hình website</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="{!! url('admin/user/list') !!}"><i class="fa lnkMemberList fa fa-users"></i><span>Danh sách thành viên</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/ManageUsers.aspx?userId=-1"><i class="fa lnkAddUser fa fa-user"></i><span>Thêm thành viên</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/RoleManager.aspx"><i class="fa lnkRoleAdmin fa fa-group"></i><span>Quản lý vai trò</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/PermissionsMenu.aspx"><i class="fa lnkPermissionAdmin fa fa-unlock-alt"></i><span>Phân quyền chức năng</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/NotificationTemplate.aspx"><i class="fa lnkNewsletter lnknotification fa fa-building"></i><span>Mẫu email thông báo</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/FileManager.aspx"><i class="fa lnkFileManager fa fa-folder-open"></i><span>Quản lý tập tin</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/ServerLog.aspx"><i class="fa lnkLogViewer fa fa-bug"></i><span>Log hệ thống</span></a>
                                </div>
                            
                                <div class="item">
                                    <a class='bg-clouds' href="http://www.phannuhoangcung.com/AdminCP/ServerInformation.aspx"><i class="fa lnkServerInfo fa fa-tree"></i><span>Thông tin hệ thống</span></a>
                                </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        
@endsection()

