@extends('layouts.admin.master')
@section('controller','Category')
@section('action','List') 
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
	        			<a href=''>Danh sách slide</a>
	        		</li>
	        	</ol>
	        </div>
        </section>
        <div class="admin-content col-md-12">
            <div class="row titlepage">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-4">
                                            <h1>Danh sách slide</h1>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="pull-right btngroups">
                                              

                                                <a id="ctl00_mainContent_adminProduct_lnkInsert" class="btn btn-default btn-insert" href="{!! url('admin/slide/add') !!}">Thêm mới</a>

                                                <input type="submit" name="ctl00$mainContent$adminProduct$btnDelete" value="Xóa (Chọn)" onclick="return confirm(&#39;Bạn có chắc chắn muốn xóa sản phẩm đã chọn?&#39;);" id="ctl00_mainContent_adminProduct_btnDelete" class="btn btn-danger btn-delete" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        @include('layouts.admin.message')
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
            <div id="ctl00_mainContent_adminProduct_pnlSearch" class="headInfo form-horizontal" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_mainContent_adminProduct_btnSearch&#39;)">             
                <div class="settingrow form-group">
                    <label for="ctl00_mainContent_adminProduct_txtTitle" class="settinglabel control-label col-sm-3">Tên sản phẩm</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input name="ctl00$mainContent$adminProduct$txtTitle" type="text" maxlength="255" id="ctl00_mainContent_adminProduct_txtTitle" />
                            <div class="input-group-btn">
                                <input type="submit" name="ctl00$mainContent$adminProduct$btnSearch" value="Tìm kiếm" id="ctl00_mainContent_adminProduct_btnSearch" class="btn btn-default" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="workplace">
                <div id="ctl00_mainContent_adminProduct_grid" class="RadGrid RadGrid_Default table-responsive" style="font-family:arial,sans-serif;width:100%;">

                    <!-- 2013.1.417.40 --><table class="rgMasterTable cmstable table table-bordered" id="ctl00_mainContent_adminProduct_grid_ctl00" style="width:100%;table-layout:auto;empty-cells:show;">
                        <colgroup>
                            <col style="width:35px" />
                            <col style="width:100px" />
                            <col style="width:215px" />
                            <col />
                            <col style="width:200px" />
                            <col style="width:200px" />
                            <col style="width:50px" />
                            <col style="width:50px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Mã Bài Viết</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Ảnh</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;white-space:nowrap;">Tên Slide</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Trạng Thái Hoạt Động</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Người Tạo</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">&nbsp;</th>
                                <th scope="col" class="rgHeader rgCheck" style="font-weight:bold;"><input id="ctl00_mainContent_adminProduct_grid_ctl00_ctl02_ctl01_columnSelectCheckBox" type="checkbox" name="ctl00$mainContent$adminProduct$grid$ctl00$ctl02$ctl01$columnSelectCheckBox" onclick="$find(&quot;ctl00_mainContent_adminProduct_grid&quot;)._selectAllRows(&quot;ctl00_mainContent_adminProduct_grid_ctl00&quot;, &quot;&quot;, event);" /></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="rgPager">
                                <td colspan="8">
                                    <table summary="Data pager which controls on which page is the RadGrid control." style="width:100%;border-spacing:0;">
                                        <caption>
                                            <span style='display: none'>Data pager</span>
                                        </caption>
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        
                                    </table>
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($data as $item)
                            <tr class="rgRow" id="ctl00_mainContent_adminProduct_grid_ctl00__0">
                                <td>
                                    {!! $item['id'] !!}
                                </td>
                                <td>
                                    <img width='90px' src="{{ url('public/upload/media/'.$item['featured_image']) }}" alt='serum.png' />
                                </td>
                                <td>
                                  <a id="ctl00_mainContent_grid_ctl00_ctl04_Hyperlink2" class="cp-link" href="{!! URL::route('admin.post.getEdit', $item['id']) !!}">  {!! $item['name'] !!}</a>
                                </td>
                                <td>
                                    <a id="ctl00_mainContent_adminProduct_grid_ctl00_ctl04_Title" class="cp-link" href="">@if ($item["status"] == 1)
                                        {!! "Hoạt động" !!}
                                      @else
                                        {!! "Ngừng hoạt động" !!}
                                      @endif</a>
                                </td>
                                <td>
                                    {!! $item['created_by'] !!}
                                </td>
                                
                                <td>
                                    <a id="ctl00_mainContent_adminProduct_grid_ctl00_ctl04_EditLink" class="cp-link" href="{!! URL::route('admin.slide.getEdit', $item['id']) !!}">Sửa</a>
                                </td>
                                <td><input id="ctl00_mainContent_adminProduct_grid_ctl00_ctl04_columnSelectCheckBox" type="checkbox" name="ctl00$mainContent$adminProduct$grid$ctl00$ctl04$columnSelectCheckBox" /></td>
                            </tr>
                        @endforeach    
                        </tbody>

                    </table><input id="ctl00_mainContent_adminProduct_grid_ClientState" name="ctl00_mainContent_adminProduct_grid_ClientState" type="hidden" />
                </div>
                <div class='modulepager'>
                    <strong>Tổng trang: {!! $data->lastPage() !!}</strong>
                    <ul class="pagination">
                        
                        @if($data->currentPage() != 1)
                                <li>
                                    <a href="{!! str_replace('/?','?',$data->url($data->currentPage()-1)) !!}">Trang trước</a>
                                </li>
                            @endif
                               @for( $i =1; $i <= $data->lastPage(); $i = $i + 1)
                               <li class="{!! ($data->currentPage() == $i) ? 'active' : '' !!}">
                                    <a  href="{!! str_replace('/?','?',$data->url($i)) !!}">{!! $i !!}</a>
                                </li>
                               @endfor
                                @if($data->currentPage() != $data->lastPage())
                                <li>
                                    <a href="{!! str_replace('/?','?',$data->url($data->currentPage()+1)) !!}">Trang sau</a>
                                </li>
                            @endif
                        
                    </ul>
                </div>

            </div>
        </div>


    </div>


</div>
@endsection()