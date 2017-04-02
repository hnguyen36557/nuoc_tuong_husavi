@extends('layouts.admin.master')
@section('controller','Category')
@section('action','Edit')
@section('content_admin')
<div id="page-content-wrapper" class="col-lg-10 col-md-9 col-sm-8">
    <div id="ctl00_divCenter" class="center-nomargins cmszone">
        <section class="breadcb">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li>
                        <a href=''><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li class='active'>
                        <a href=''>Danh sách sản phẩm</a>
                    </li>
                </ol>
            </div>
        </section>
        <form enctype="multipart/form-data" method="post" action="" >
		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="admin-content col-md-12">
            <div id="ctl00_mainContent_upButton">
                <div class="row titlepage">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-header">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-sm-4">
                                                <h1>Thêm/Sửa sản phẩm</h1>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="pull-right btngroups">
                                                    <input type="submit" value="Cập Nhật"  class="btn btn-default btn-insert" />
                                                    
                                                </div>
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
                                Nội dung
                            </a>
                        </li>
                        <li class="newsedit-metatab">
                            <a href="#tabMeta" aria-controls="tabMeta" role="tab"
                               data-toggle="tab">
                                Cấu hình SEO
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tabContent" role="tabpanel" class="tab-pane fade active in">
                            <div class="form-horizontal">
                                
                                <div id="ctl00_mainContent_up">

                                    <div id="ctl00_mainContent_tabLanguage" class="RadTabStrip RadTabStrip_Default RadTabStripTop_Default subtabs">
                                        <!-- 2013.1.417.40 --><div class="rtsLevel rtsLevel1">
                                            <ul class="rtsUL"><li class="rtsLI rtsFirst rtsLast"><a class="rtsLink rtsSelected" href="#"><span class="rtsOut"><span class="rtsIn"><img class="rtsImg" alt="" src="/Data/SiteImages/flags/vn.gif" /><span class="rtsTxt">Tiếng Việt</span></span></span></a></li></ul>
                                        </div><input id="ctl00_mainContent_tabLanguage_ClientState" name="ctl00_mainContent_tabLanguage_ClientState" type="hidden" />
                                    </div>

                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtTitle" class="settinglabel control-label col-sm-3">Tiêu đề bài viết</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="product_txtName" type="text" tabindex="1" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" value="{!! old('product_txtName',isset($data) ? $data['name'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                            <span id="ctl00_mainContent_reqTitle" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập tiêu đề.</span>
                                        </div>
                                    </div>

                                    <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Danh Mục</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="product_sltParent"  class="left" tabindex="2" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												<option value="0">Chọn danh mục</option>
												
								                <?php cate_parent($cate,0,"",$data["category_id"]) ?>
											</select>
											<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
										</div>	
										</div>
                                        
                                    </div>
                                   
                                   
                                    <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
                                    <label class="settinglabel control-label col-sm-3">Hình ảnh</label>
                                    <div class="col-sm-9">
                                       <div class="input-group">
                                            <?php
                                                if($data['featured_image']!="")
                                                {
                                                  echo "Hiện tại đã có hình";
                                                }
                                                else
                                                  {
                                                      echo "Hiện tại chưa có hình";
                                                  }
                                                ?>
                                                  <img width="100px" height="70px" src="{!! url('public/upload/product/'.$data['featured_image']) !!}" />
                                                  <input type="file" id="exampleInputFile" name="product_fImages" value="{!! old('product_fImages') !!}">
                                           
                                        </div>
                                    </div>
                                </div>

                                <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
                                    <label class="settinglabel control-label col-sm-3">Mô Tả Ngắn:</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea id="ctl00_mainContent_edFullContentinnerEditorContentHiddenTextarea" tabindex="4" rows="4" cols="20"  name="product_txtShortContent">{!! old('product_txtShortContent',isset($data) ? $data['short_content'] : null) !!}</textarea>
                                        <div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
                                    </div>

                                    </div>
                                </div>

							     <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
	                            	<label class="settinglabel control-label col-sm-3">Nội dung:</label>
	                            	<div class="col-sm-9">
	                            	<div class="input-group">
	                            		<textarea id="contentText" tabindex="4" rows="4" cols="20"  name="post_txtContent">{!! old('product_txtContent',isset($data) ? $data['long_content'] : null) !!}</textarea>
	                            		<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
	                            	</div>
                                    <script type="text/javascript">
                                        CKEDITOR.replace( 'contentText' );
                                      </script>
	                            	</div>
	                            </div>

	                            <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Hiện trang chủ</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="product_txtHomeFlat"  class="left" id="ctl00_mainContent_txtUrl" tabindex="5" class="forminput verywidetextbox">
										    @if( $data['home_flat'] == 0)   
                                                Ẩn 
                                            @else
                                                Hiện
                                            @endif
												<option value="0">  -Ẩn</option>
								                <option value="1">	-Hiện</option>
								               
											</select>
											<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
										</div>	
										</div>
                                        
                                </div>

                                <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Sản phẩm nổi bật</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
                                            <select name="product_txtHotFlat"  class="left" id="ctl00_mainContent_txtUrl" tabindex="5" class="forminput verywidetextbox">
                                            	@if( $data['hot_flat'] == 0)   
                                                    Ẩn
                                                @else
                                                    Hiện
                                                @endif
                                                <option value="0">  -Ẩn</option>
                                                <option value="1">  -Hiện</option>
                                               
                                            </select>
                                            <div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
                                        </div>  
                                        </div>
                                        
                                </div>

                                <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Trạng Thái Hoạt Động</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="product_sltStatus"  class="left" tabindex="6" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												@if( $data['enable'] == 0)   
                                                            Disble
                                                        @else
                                                            Enable
                                                        @endif
												<option value="1">Enable</option>
								                <option value="0">Disble</option>
								                
											</select>
											<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
										</div>	
										</div>
                                </div>
                                 <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtTitle" class="settinglabel control-label col-sm-3">Người Tạo</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="product_txtCreateBy" type="text" tabindex="8" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" value="@if(Auth::user()) {{ Auth::user()->fullname }} @endif" />
                                                <div class="input-group-addon"><a class="mhelp" href="fsfsef"><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                            <span id="ctl00_mainContent_reqTitle" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập tiêu đề.</span>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                        <div id="tabMeta" role="tabpanel" class="tab-pane fade">
                            <div class="form-horizontal">
                                <div id="ctl00_mainContent_upSEO">

                                    <div id="ctl00_mainContent_tabLanguageSEO" class="RadTabStrip RadTabStrip_Default RadTabStripTop_Default subtabs">
                                        <div class="rtsLevel rtsLevel1">
                                            <ul class="rtsUL"><li class="rtsLI rtsFirst rtsLast"><a class="rtsLink rtsSelected" href="#"><span class="rtsOut"><span class="rtsIn"><img class="rtsImg" alt="" src="/Data/SiteImages/flags/vn.gif" /><span class="rtsTxt">Tiếng Việt</span></span></span></a></li></ul>
                                        </div><input id="ctl00_mainContent_tabLanguageSEO_ClientState" name="ctl00_mainContent_tabLanguageSEO_ClientState" type="hidden" />
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaTitle" class="settinglabel control-label col-sm-3">Thẻ "Title" (60 - 80 ký tự)</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="product_txtMetaTitle" type="text" tabindex="9" maxlength="65" id="ctl00_mainContent_txtMetaTitle" value="{!! old('product_txtMetaTitle',isset($data) ? $data['meta_title'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaDescription" tabindex="10" class="settinglabel control-label col-sm-3">Thẻ "Description"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="product_txtMetaDesc" type="text" maxlength="156" id="ctl00_mainContent_txtMetaDescription" value="
                                                {!! old('product_txtMetaDesc',isset($data) ? $data['meta_description'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaKeywords" class="settinglabel control-label col-sm-3">Thẻ "Keywords"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="product_txtKeyword" type="text" tabindex="11" maxlength="156" id="ctl00_mainContent_txtMetaKeywords" value="{!! old('product_txtKeyword',isset($data) ? $data['meta_keywords'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
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