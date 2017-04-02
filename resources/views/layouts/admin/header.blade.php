<div id="header" class="clearfix resize">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarsubCMS" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a id="ctl00_TopPane1_hplLogo" class="navbar-brand" href="{{ url('admin/home') }}"><img src="{!! url('/public/upload/media/logo.png') !!}" alt="" height="30px" style="margin-top: 10px" /></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <nav>
                        <ul class="hidden-xs nav navbar-nav">
                            <li class="ctlons">
                                <a id="menu-toggle"><i class="fa fa-bars"></i><em class="fa fa-caret-down"></em></a>
                            </li>
                        </ul>
                        <ul class="hidden-xs hidden-sm nav navbar-nav navbar-right">
                            
                                    <li>
                                        <a id="ctl00_TopPane1_rptLanguage_ctl00_lkbLanguage" class="language" href="javascript:__doPostBack(&#39;ctl00$TopPane1$rptLanguage$ctl00$lkbLanguage&#39;,&#39;&#39;)">en</a>
                                    </li>
                                
                            <li class="dropdown author">
                                <a href="javascript:return false;" class="dropdown-toggle" role="button" aria-expanded="false">
                                @if(Auth::check())
                                  <img  alt='Get your avatar' src="{!! url('public/upload/user/'.Auth::user()->featured_image) !!}" class='fa lnkAddUser fa fa-user' />
                                @endif
                                    
                                </a>
                                <div class="dropdown-menu" role="menu">
                                    <div class="media clearfix">
                                        <div class="title">
                                            <a class='' href=''>
                                            @if(Auth::check())
                                              Xin chào {!! Auth::user()->fullname !!}
                                            @endif
                                            </a>
                                        </div>
                                        <a class="media-left" href="javascript:return false;">
                                        @if(Auth::check())
                                            <img  alt='Get your avatar' src="{!! url('public/upload/user/'.Auth::user()->featured_image) !!}" class='avatar' />
                                        @else
                                        <img  alt='Get your avatar' src="" class='avatar' />
                                        @endif
                                        </a>
                                        @if(Auth::check())
                                        <div class="media-body">
                                            <nav>
                                                <ul class="nav">
                                                    <li class=""><a class="" href="{!! url('admin/user/profile') !!}"><i class="fa fa-user"></i> Thông tin tài khoản</a></li>
                                                    <li class=""><a class="" href="{!! url('auth/logout') !!}"><i class="fa fa-sign-out"></i> Thoát</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
  <li>
    <a class="viewwebsite" href="{{ url('/') }}">
      <i class="fa fa-desktop">
      </i> Xem website</a>
  </li>
  <li class="dropdown" role="button" aria-expanded="false">
    <a href="#" target="_self">
      <i class="fa fa-cog">
      </i> Kiểm soát website</a>
    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="" target="_self">
          <i class="lnkSiteSettings fa fa-cogs">
          </i> Cấu hình website</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-navicon">
          </i> Định nghĩa menu quản trị</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-language">
          </i> Quản lý ngôn ngữ</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-delicious">
          </i> Danh sách quốc gia</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-delicious">
          </i> Danh sách vùng miền</a>
      </li>
    </ul>
  </li>
  <li class="dropdown" role="button" aria-expanded="false">
    <a href="#" target="_self">
      <i class="fa fa-pencil">
      </i> Thiết kế</a>
    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="" target="_self">
          <i class="lnkPageTree fa fa-puzzle-piece">
          </i> Quản lý mẫu trang</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkContentTemplates fa fa-building">
          </i> Mẫu nội dung công cụ soạn thảo</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkStyleTemplates fa fa-css3">
          </i> CSS dùng trong công cụ soạn thảo</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-cubes">
          </i> Quản lý skin</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-life-ring">
          </i> Công cụ bộ nhớ đệm</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkContentManager fa fa-file-image-o">
          </i> Quản lý nội dung</a>
      </li>
    </ul>
  </li>
  <li class="dropdown" role="button" aria-expanded="false">
    <a href="#" target="_self">
      <i class="fa fa-wrench">
      </i> Công cụ</a>
    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="" target="_self">
          <i class="fa fa-link">
          </i> Quản lý URL</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-external-link">
          </i> Cấu hình chuyển hướng 301</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkFileManager fa fa-folder-open">
          </i> Quản lý tập tin</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkLogViewer fa fa-bug">
          </i> Log hệ thống</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-wrench">
          </i> Cài đặt và cấu hình tính năng</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-tasks">
          </i> Task Queue</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-stop">
          </i> Khóa truy cập theo IP</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-bitbucket">
          </i> Dữ liệu đã xóa</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkServerInfo fa fa-tree">
          </i> Thông tin hệ thống</a>
      </li>
    </ul>
  </li>
  <li class="dropdown" role="button" aria-expanded="false">
    <a href="#" target="_self">
      <i class="fa fa-map-marker">
      </i> Tiếp thị</a>
    <ul class="dropdown-menu" role="menu">
      <li>
        <a href="" target="_self">
          <i class="lnkNewsletter lnknotification fa fa-building">
          </i> Mẫu email thông báo</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-building">
          </i> Mẫu câu thông báo</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkRegistrationAgreement fa fa-bell-o">
          </i> Nội dung thỏa thuận đăng ký</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="lnkLoginInfo fa fa-bell">
          </i> Nội dung trang Đăng nhập</a>
      </li>
      <li>
        <a href="" target="_self">
          <i class="fa fa-comments">
          </i> Đánh giá sản phẩm</a>
      </li>
    </ul>
  </li>
</ul>
                    </nav>
                </div>
            </div>
        </nav>
    </div>
    <div id="subheader" class="hidden-xs">
        <nav class="navbarsub navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarsub" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="navbar-brand"></div>
                </div>
                <div id="navbarsub" class="navbar-collapse collapse">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="" href="{!! url('/') !!}"><i class="fa fa-home"></i> Trang chủ</a>
                            </li>
                            
                                    <li>
                                        <a target='_self'
                                           href="{!! url('admin/post/list') !!}">
                                            Danh sách bài viết
                                        </a>
                                    </li>
                                
                                    <li>
                                        <a target='_self'
                                           href="{!! url('admin/post/add') !!}">
                                            Thêm mới bài viết
                                        </a>
                                    </li>
                                
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
    </div>