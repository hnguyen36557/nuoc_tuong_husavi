@extends('layouts.admin.master')
@section('controller','Category')
@section('action','Edit')
@section('content_admin')
	
	<div id="page-content-wrapper" class="col-lg-10 col-md-9 col-sm-8">
    <div id="ctl00_divCenter" class="center-nomargins cmszone">
        <section class="breadcb"><div class="col-md-12"><ol class="breadcrumb"><li><a href=''><i class="fa fa-dashboard"></i> Dashboard</a></li><li><a href=''>Danh sách bài viết</a></li><li class='active'><a href=''>Thêm/Sửa bài viết</a></li></ol></div></section>
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
                                                <h1>Thêm/Sửa bài viết</h1>
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
                                        <label for="ctl00_mainContent_txtTitle" class="settinglabel control-label col-sm-3">Tiêu đề</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="cate_txtName" type="text" maxlength="255" value="{!! old('cate_txtName',isset($data) ? $data['name'] : null) !!}" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                            <span id="ctl00_mainContent_reqTitle" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập tiêu đề.</span>
                                        </div>
                                    </div>

                                    <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Danh Mục</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="cate_sltParent"  class="left" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												
								                <?php cate_parent($cate,0,"",$data["parent_id"]) ?>
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
                                                  <img width="100px" height="70px" src="{!! url('public/upload/cate/'.$data['featured_image']) !!}" />
                                                  <input type="file" id="exampleInputFile" name="cate_fImages" value="{!! old('cate_fImages') !!}">
                                           
                                        </div>
                                    </div>
                                </div>

							     <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
	                            	<label class="settinglabel control-label col-sm-3">Nội dung:</label>
	                            	<div class="col-sm-9">
	                            	<div class="input-group">
	                            		<textarea id="ctl00_mainContent_edFullContentinnerEditorContentHiddenTextarea"  rows="4" cols="20"  name="cate_txtContent">{!! old('cate_txtContent',isset($data) ? $data['content'] : null) !!}</textarea>
	                            		<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
	                            	</div>

	                            	</div>
	                            </div>

	                            <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Loại Danh Mục</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="cate_txtType"  class="left" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												<option value="{!! old('cate_txtType',isset($data) ? $data['type'] : null) !!}">{!! old('cate_txtType',isset($data) ? $data['type'] : null) !!}</option>
												<option value="Product">-Product</option>
								                <option value="Post">	-Post</option>
								                <option value="Media">	-Media</option>
											</select>
											<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
										</div>	
										</div>
                                        
                                </div>

                                <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Trạng Thái Hoạt Động</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="cate_sltStatus"  class="left" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												<option value="{!! old('cate_sltStatus',isset($data) ? $data['enable'] : null) !!}">
                                                        @if( $data['enable'] == 0)   
                                                            Disble
                                                        @else
                                                            Enable
                                                        @endif
                                                </option>
												<option value="1">Enable</option>
								                <option value="0">	Disable</option>
								                
											</select>
											<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
										</div>	
										</div>
                                        
                                </div>

                                <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Ẩn/ Hiện</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="cate_txtMenu"  class="left" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												<option value="{!! old('cate_txtMenu',isset($data) ? $data['menu'] : null) !!}">
                                                        @if( $data['menu'] == 0)   
                                                            Disble
                                                        @else
                                                            Enable
                                                        @endif
                                                </option>
												<option value="1">Enable</option>
								                <option value="0">	Disble</option>
								                
											</select>
											 <div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
										</div>	
										</div>
                                        
                                </div>
								   
								
                                 <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtTitle" class="settinglabel control-label col-sm-3">Người Tạo</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="cate_txtCreateBy" type="text" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" value="@if(Auth::user()) {{ Auth::user()->fullname }} @endif" />
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
                                                <input name="cate_txtMetaTitle" type="text" maxlength="65" id="ctl00_mainContent_txtMetaTitle" value="{!! old('cate_txtMetaTitle',isset($data) ? $data['meta_title'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaDescription" class="settinglabel control-label col-sm-3">Thẻ "Description"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="cate_txtMetaDesc" type="text" maxlength="156" id="ctl00_mainContent_txtMetaDescription" value="{!! old('cate_txtMetaDesc',isset($data) ? $data['meta_description'] : null) !!}" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaKeywords" class="settinglabel control-label col-sm-3">Thẻ "Keywords"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="cate_txtKeyword" type="text" maxlength="156" id="ctl00_mainContent_txtMetaKeywords" value="{!! old('cate_txtKeyword',isset($data) ? $data['meta_keyword'] : null) !!}" />
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