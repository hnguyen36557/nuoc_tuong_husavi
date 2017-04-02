@extends('layouts.admin.master')
@section('controller','User')
@section('action','List') 
@section('content_admin')

<div id="page-content-wrapper" class="col-lg-10 col-md-9 col-sm-8">
    <div id="ctl00_divCenter" class="center-nomargins cmszone">
        <section class="breadcb"><div class="col-md-12"><ol class="breadcrumb"><li><a href=''><i class="fa fa-dashboard"></i> Dashboard</a></li><li class='active'><a href=''>Danh sách thành viên</a></li></ol></div></section>
        <div class="admin-content col-md-12">
            <div class="row titlepage">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-sm-4">
                                            <h1>Danh sách thành viên</h1>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="pull-right btngroups">
                                                <a id="ctl00_mainContent_lnkNewUser" class="btn btn-default btn-insert" href="{{ url('admin/user/add') }}">Thêm thành viên</a>
                                                <input type="submit" name="ctl00$mainContent$btnExport" value="Xuất Excel" id="ctl00_mainContent_btnExport" class="btn btn-default" />
                                                <input type="submit" name="ctl00$mainContent$btnDelete" value="Xóa (Chọn)" onclick="return confirm(&#39;Bạn có chắc chắn muốn xóa dữ liệu được chọn?&#39;);" id="ctl00_mainContent_btnDelete" class="btn btn-danger btn-delete" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="headInfo">
                <div class="form-horizontal">
                    <div id="ctl00_mainContent_divNewUser" class="row" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;ctl00_mainContent_btnSearchUser&#39;)">

                        <div class="col-md-6">
                            <div class="input-group">
                                <input name="ctl00$mainContent$txtSearchUser" type="text" maxlength="255" id="ctl00_mainContent_txtSearchUser" class="form-control" />
                                <div class="input-group-btn">
                                    <input type="submit" name="ctl00$mainContent$btnSearchUser" value="Tìm kiếm" id="ctl00_mainContent_btnSearchUser" class="btn btn-default btn-search" />
                                </div>
                            </div>
                        </div>
                        <!-- <div id="ctl00_mainContent_divIPLookup" class="col-md-6">
                            <div class="input-group">
                                <input name="ctl00$mainContent$txtIPAddress" type="text" maxlength="50" id="ctl00_mainContent_txtIPAddress" class="form-control" />
                                <div class="input-group-btn">
                                    <input type="submit" name="ctl00$mainContent$btnIPLookup" value="Tìm kiếm theo địa chỉ IP" id="ctl00_mainContent_btnIPLookup" class="btn btn-default btn-search" />
                                </div>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
            <div class="workplace">
                <div id="ctl00_mainContent_grid" class="RadGrid RadGrid_Default table-responsive" style="font-family:arial,sans-serif;width:100%;">

                    <!-- 2013.1.417.40 --><table class="rgMasterTable cmstable table table-bordered" id="ctl00_mainContent_grid_ctl00" style="width:100%;table-layout:auto;empty-cells:show;">
                        <colgroup>
                            <col style="width:35px" />
                            <col style="width:280px"/>
                            <col style="width:280px"/>
                            <col style="width:250px" />
                            <col style="width:200px" />
                            <col style="width:100px" />
                        </colgroup>
                        <thead>
                            <tr>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">STT</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Tài khoản</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Email</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">Ngày đăng ký</th>
                                <th scope="col" class="rgHeader" style="font-weight:bold;">&nbsp;</th>
                                <th scope="col" class="rgHeader rgCheck" style="font-weight:bold;"><input id="ctl00_mainContent_grid_ctl00_ctl02_ctl00_columnSelectCheckBox" type="checkbox" name="ctl00$mainContent$grid$ctl00$ctl02$ctl00$columnSelectCheckBox" onclick="$find(&quot;ctl00_mainContent_grid&quot;)._selectAllRows(&quot;ctl00_mainContent_grid_ctl00&quot;, &quot;&quot;, event);" /></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($data as $item)
                            <tr class="rgRow" id="">
                                <td>{!! $item['id'] !!} </td>
                                <td><strong>{!! $item['name'] !!}</strong></td>
                                <td>
                                    {{ $item['email'] }}
                                </td>
                                <td>
                                    {{ $item['created_at'] }}
                                </td>
                                <td>
                                    <a class="cp-link" href="{!! url('admin/user/edit',[$item['id']]) !!}">
                                        Xem thông tin
                                    </a>
                                    <a id="" class="cp-link" href="">Quản lý</a>
                                </td>
                                <td><input id="ctl00_mainContent_grid_ctl00_ctl04_columnSelectCheckBox" type="checkbox" name="ctl00$mainContent$grid$ctl00$ctl04$columnSelectCheckBox" /></td>
                            </tr>
                        @endforeach   
                        </tbody>

                    </table><input id="ctl00_mainContent_grid_ClientState" name="ctl00_mainContent_grid_ClientState" type="hidden" />
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