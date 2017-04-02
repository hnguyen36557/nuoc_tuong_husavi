<div id="sidebar-wrapper" class="col-lg-2 col-md-3 col-sm-4">
<section class="navigation" role="navigation">
    <div class="panel-group navbar-collapse collapse" role="tablist" id="navbarsubCMS">
      <div class="panel panel-primary">
        <div class="panel-heading" role="tab" id="collapse_Heading_1">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_1" aria-controls="collapse_Menu_1">
              <i class="fa fa-user">
              </i> Thành viên</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_1" aria-labelledby="collapse_Heading_1">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{!! url('admin/user/list') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách thành viên</a>
            </li>
            <li class="list-group-item">
              <a href="{!! url('admin/user/add') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Thêm thành viên</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Quản lý vai trò</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Phân quyền chức năng</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Hoạt động quản trị</a>
            </li>
          </ul>
        </div>
        <div class="panel-heading" role="tab" id="collapse_Heading_2">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_2" aria-controls="collapse_Menu_2">
              <i class="fa fa-suitcase">
              </i> Trang</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_2" aria-labelledby="collapse_Heading_2">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{!! url('admin/page/list') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách trang</a>
            </li>
            <li class="list-group-item">
              <a href="{!! url('admin/page/add') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Thêm mới trang</a>
            </li>
            <li class="list-group-item">
              <a href="{!! url('admin/cate/list',['PAGE']) !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh mục trang</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Phân quyền truy cập trang</a>
            </li>
           
          </ul>
        </div>
        <div class="panel-heading" role="tab" id="collapse_Heading_3">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_3" aria-controls="collapse_Menu_3">
              <i class="fa fa-copy">
              </i> Bài viết</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_3" aria-labelledby="collapse_Heading_3">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{!! url('admin/post/list') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách bài viết</a>
            </li>
            
            <li class="list-group-item">
              <a href="{!! url('admin/cate/list/Post') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh mục bài viết</a>
            </li>
            <li class="list-group-item">
              <a href="{!! url('admin/post/add') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Thêm mới bài viết</a>
            </li>
            
          </ul>
        </div>
        <div class="panel-heading" role="tab" id="collapse_Heading_4">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_4" aria-controls="collapse_Menu_4">
              <i class="fa fa-gift">
              </i> Sản phẩm</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_4" aria-labelledby="collapse_Heading_4">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{!! url('admin/product/list') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách sản phẩm</a>
            </li>
            <li class="list-group-item">
              <a href="{!! url('admin/product/add') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Thêm mới sản phẩm</a>
            </li>
            <li class="list-group-item">
              <a href="{!! url('admin/cate/list/Product') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh mục sản phẩm</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Di chuyển sản phẩm</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Thuộc tính sản phẩm</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Cập nhật icon sản phẩm</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách tag</a>
            </li>
          </ul>
        </div>
        <div class="panel-heading" role="tab" id="collapse_Heading_5">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_5" aria-controls="collapse_Menu_5">
              <i class="fa fa-cube">
              </i> Nội dung khác</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_5" aria-labelledby="collapse_Heading_5">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="{!! url('admin/media/list') !!}" target="_self">
                <i class="fa fa-caret-right">
                </i>Banner</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Video</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Hỏi đáp</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Mạng lưới</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Tài liệu</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Hình ảnh</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Bình chọn</a>
            </li>
          </ul>
        </div>
        <div class="panel-heading" role="tab" id="collapse_Heading_6">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_6" aria-controls="collapse_Menu_6">
              <i class="fa fa-shopping-cart">
              </i> Đơn hàng</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_6" aria-labelledby="collapse_Heading_6">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách đơn hàng</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Quản lý giỏ hàng</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Phương thức thanh toán</a>
            </li>
          </ul>
        </div>
        <div class="panel-heading" role="tab" id="collapse_Heading_7">
          <h4 class="panel-title">
            <a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#CMS_Menu_7" aria-controls="collapse_Menu_7">
              <i class="fa fa-th">
              </i> Thống kê</a>
          </h4>
        </div>
        <div class="panel-collapse collapse" role="tabpanel" aria-expanded="false" id="CMS_Menu_7" aria-labelledby="collapse_Heading_7">
          <ul class="list-group">
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Danh sách khách hàng</a>
            </li>
            <li class="list-group-item">
              <a href="" target="_self">
                <i class="fa fa-caret-right">
                </i>Ngày sinh nhật</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  </div>