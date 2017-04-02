<!DOCTYPE html>
<html>
@include('layouts.admin.head')
<body id="ctl00_Body" class="admin whiteskins adminmenu administration">
    <div id="wrapper">
<script src="{{ url('public/admin/js/webResource.js') }}" type="text/javascript"></script>
<script src="{{ url('public/admin/js/scriptResource.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ url('public/admin-master/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'aspnetForm', [], [], [], 90, 'ctl00');
//]]>
</script>
@include('layouts.admin.header')
<main id="main">
<div class="container-fluid-full">
    <div class="row"> 
    @include('layouts.admin.left')         
    @yield('content_admin')
    </div>
</div>
</main>
@include('layouts.admin.footer')
<div id="ctl00_ah1" class="cmsadminpanel">
<div class="row">
    <div class="col-lg-12">
        <nav>
            <ul class="nav navbar-nav listmenu">
                <li><a class="adminlink adminmenulink" href="{!! url('admin/dashboard') !!}"><i class="fa fa-key"></i> Quản trị</a></li>
                <li><a class="adminlink filemanlink popup-link" href=""><i class="fa fa-folder-open"></i> Quản l&#253; tập tin</a></li>
                <li><a class="adminlink newpagelink" href="{!! url('admin/post/add') !!}"><i class="fa fa-file"></i> Thêm bài viết</a></li>
                <li><a class="adminlink newpagelink" href="{!! url('admin/page/add') !!}"><i class="fa fa-file"></i> Tạo trang</a></li>
                <li> 
                </li>
            </ul>
            <ul class="nav">
                <li><a href="#" id="pullmenucms"><i class="fa fa-chevron-circle-right"></i></a></li>
            </ul>
        </nav>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("#pullmenucms").click(function (e) {
            e.preventDefault();
            if ($(this).parents('.cmsadminpanel').hasClass('toggled')) { ShowToolbar(); Set_Cookie('toolbarOpenState', 'open'); }
            else { HideToolbar(); Set_Cookie('toolbarOpenState', 'closed'); }
        });
        var openState = Get_Cookie('toolbarOpenState');
        if (openState != null) { if (openState == 'closed') { HideToolbar(); } if (openState == 'open') { ShowToolbar(); } }
    });
    function HideToolbar() { $('.cmsadminpanel').addClass("toggled"); $('.fa-chevron-circle-right').addClass('fa-rotate-180'); }
    function ShowToolbar() { $('.cmsadminpanel').removeClass("toggled"); $('.fa-chevron-circle-right').removeClass('fa-rotate-180'); }
</script>
            
</div>
        

<script type="text/javascript" >$('a.popup-link').fancybox({width:'80%', height:'80%', type:'iframe', autoSize:false, title:{type:'outside'} });</script>
    </div>
</body>
<script src="{{ url('public/admin/js/plugins.js') }}"></script>
<script src="{{ url('public/admin/js/global.js') }}"></script>
</html>