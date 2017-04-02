@extends('layouts.admin.master')
@section('controller','Category')
@section('action','Add')
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
                        <a href=''>Danh sách bài viết</a>
                    </li>
                </ol>
            </div>
        </section>
        <form enctype="multipart/form-data" method="post" action="{!! url('admin/slide/add') !!}" >
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
                                                    <input type="submit" value="Thêm mới"  class="btn btn-default btn-insert" />
                                                    
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
                                            <ul class="rtsUL"><li class="rtsLI rtsFirst rtsLast"><a class="rtsLink rtsSelected" href="#"><span class="rtsOut"><span class="rtsIn"><img class="rtsImg" alt="" src="" /><span class="rtsTxt">Tiếng Việt</span></span></span></a></li></ul>
                                        </div><input id="ctl00_mainContent_tabLanguage_ClientState" name="ctl00_mainContent_tabLanguage_ClientState" type="hidden" />
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtTitle" class="settinglabel control-label col-sm-3">Tên Slide</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="slide_txtName" type="text" tabindex="1" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                            <span id="ctl00_mainContent_reqTitle" class="fa fa-exclamation-triangle" style="display:none;">Vui lòng nhập tiêu đề.</span>
                                        </div>
                                    </div>
                                    
                                   
                                    <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
                                    <label class="settinglabel control-label col-sm-3">Hình ảnh</label>
                                    <div class="col-sm-9">
                                       <div class="input-group">
                                            <input type="file" tabindex="3" name="slide_fImages"  size="25">
                                           
                                        </div>
                                    </div>
                                </div>

                                <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
                                    <label class="settinglabel control-label col-sm-3">Mô Tả Ngắn:</label>
                                    <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea id="ctl00_mainContent_edFullContentinnerEditorContentHiddenTextarea" tabindex="4" rows="4" cols="20"  name="slide_txtShortContent">{!! old('slide_txtShortContent') !!}</textarea>
                                        <div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
                                    </div>

                                    </div>
                                </div>

							     <div id="ctl00_mainContent_divUploadImage" class="settingrow form-group">
	                            	<label class="settinglabel control-label col-sm-3">Nội dung:</label>
	                            	<div class="col-sm-9">
	                            	<div class="input-group">
	                            		<textarea id="contentText" tabindex="4" rows="4" cols="20"  name="slide_txtContent">{!! old('slide_txtContent') !!}</textarea>
	                            		<div class="input-group-addon"><a class="mhelp" href="http://www.phannuhoangcung.com/Help.aspx?helpkey=newsedit-metatitle-help"><i class="fa fa-question-circle"></i> </a></div>
	                            	</div>
                                    <script type="text/javascript">
                                        CKEDITOR.replace( 'contentText' );
                                      </script>

	                            	</div>
	                            </div>

	                            

                                

                                <div class="settingrow form-group newsedit-url">
                                        <label for="ctl00_mainContent_txtUrl" class="settinglabel control-label col-sm-3">Trạng Thái Hoạt Động</label>
                                        <div class="col-sm-9">
                                        <div class="input-group">
										    <select name="slide__sltStatus"  class="left" tabindex="6" id="ctl00_mainContent_txtUrl" class="forminput verywidetextbox">
												
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
                                                <input name="slide_txtCreateBy" type="text" tabindex="8" maxlength="255" id="ctl00_mainContent_txtTitle" class="forminput verywidetextbox" value="@if(Auth::user()) {{ Auth::user()->fullname }} @endif" />
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
                                                <input name="slide_txtMetaTitle" type="text" tabindex="9" maxlength="65" id="ctl00_mainContent_txtMetaTitle" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaDescription" tabindex="10" class="settinglabel control-label col-sm-3">Thẻ "Description"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="slide_txtMetaDesc" type="text" maxlength="156" id="ctl00_mainContent_txtMetaDescription" />
                                                <div class="input-group-addon"><a class="mhelp" href=""><i class="fa fa-question-circle"></i> </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="settingrow form-group">
                                        <label for="ctl00_mainContent_txtMetaKeywords" class="settinglabel control-label col-sm-3">Thẻ "Keywords"</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input name="slide_txtKeyword" type="text" tabindex="11" maxlength="156" id="ctl00_mainContent_txtMetaKeywords" />
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