@extends('layouts.admin.master')
@section('controller','Category')
@section('action','Add')
@section('content_admin')
	
	<div id="page-content-wrapper" class="col-lg-10 col-md-9 col-sm-8">
    <div id="ctl00_divCenter" class="center-nomargins cmszone">
        <section class="breadcb"><div class="col-md-12"><ol class="breadcrumb"><li><a href=''><i class="fa fa-dashboard"></i> Dashboard</a></li><li><a href=''>Danh sách hình ảnh/ video</a></li><li class='active'><a href=''>Thêm/Sửa hình ảnh/ video</a></li></ol></div></section>
        @include('layouts.admin.blocks.error')
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
                                                <h1>Thêm/Sửa hình ảnh/ video</h1>
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
                                                <input name="media_txtName" type="text" tabindex="1" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" value="{!! old('media_txtName',isset($data) ? $data['name'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                            <span id="ctl00_mainContent_reqTitle" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập tiêu đề.</span>
                                        </div>
                                    </div>

                                    <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Danh Mục</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="media_sltParent"  class="left" tabindex="2" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
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
                                                  <img width="100px" height="70px" src="{!! url('public/upload/media/'.$data['featured_image']) !!}" />
                                                  <input type="file" id="exampleInputFile" name="media_fImages" value="{!! old('media_fImages') !!}">
                                           
                                        </div>
                                    </div>
                                </div>

                                <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
                                    <label class="settinglabel control-label col-sm-3">Mô Tả Ngắn:</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea id="ctl00_mainContent_edFullContentinnerEditorContentHiddenTextarea" tabindex="4" rows="4" cols="20"  name="media_txtShortContent">{!! old('media_txtShortContent',isset($data) ? $data['short_content'] : null) !!}</textarea>
                                        <div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
                                    </div>

                                    </div>
                                </div>

							     <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
	                            	<label class="settinglabel control-label col-sm-3">Nội dung:</label>
	                            	<div class="col-sm-9">
	                            	<div class="input-group">
	                            		<textarea id="contentText" tabindex="4" rows="4" cols="20"  name="media_txtContent">{!! old('media_txtContent',isset($data) ? $data['long_content'] : null) !!}</textarea>
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
										    <select name="media_txtHomeFlat"  class="left" id="ctl00_mainContent_txtUrl" tabindex="5" class="forminput verywidetextbox">
										    @if( $data['media_flat'] == 0)   
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
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Bài viết nổi bật</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
                                            <select name="media_txtHotFlat"  class="left" id="ctl00_mainContent_txtUrl" tabindex="5" class="forminput verywidetextbox">
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
										    <select name="media_sltStatus"  class="left" tabindex="6" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
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
                                                <input name="media_txtCreateBy" type="text" tabindex="8" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" value="@if(Auth::user()) {{ Auth::user()->fullname }} @endif" />
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
                                                <input name="media__txtMetaTitle" type="text" tabindex="9" maxlength="65" id="ctl00_mainContent_txtMetaTitle" value="{!! old('media__txtMetaTitle',isset($data) ? $data['meta_title'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaDescription" tabindex="10" class="settinglabel control-label col-sm-3">Thẻ "Description"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="media__txtMetaDesc" type="text" maxlength="156" id="ctl00_mainContent_txtMetaDescription" value="
                                                {!! old('media__txtMetaDesc',isset($data) ? $data['meta_description'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaKeywords" class="settinglabel control-label col-sm-3">Thẻ "Keywords"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="media__txtKeyword" type="text" tabindex="11" maxlength="156" id="ctl00_mainContent_txtMetaKeywords" value="{!! old('media__txtKeyword',isset($data) ? $data['meta_keyword'] : null) !!}" />
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