@extends('admin.master') @section('controller','User')
@section('action','Edit') @section('content')
@include('admin.user.head')

<div class="line"></div>

<div class="wrapper">
	<div class="widget">
		<div class="title">
			<h6>Cập nhật thông tin thành viên</h6>
		</div>
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<fieldset>
				<!-- field name -->
				<div class="formRow">
					<label class="formLeft" for="param_name">Tài Khoản:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtUsername" id="param_name" _autocheck="true" type="text" value="{!! old('txtUsername',isset($data) ? $data['username'] : null ) !!}"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"> </div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- field email -->
				<div class="formRow">
					<label class="formLeft" for="param_email">Email:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtEmail" id="param_email" _autocheck="true" type="text" value="{!! old('txtEmail',isset($data) ? $data['email'] : null ) !!}"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
								<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
								<div class="formRight">
									<div class="left">
							    		<?php
				                        if($data['image']!="")
				                        {
				                          echo "Hiện tại đã có hình";
				                        }
				                        else
				                          {
				                              echo "Hiện tại chưa có hình";
				                          }
				                        ?>
				                          <img width="100px" height="70px" src="{!! url('public/upload/user/'.$data['avatar']) !!}" />
				                          <input type="file" id="exampleInputFile" name="fImages" value="{!! old('fImages') !!}">
									</div>
									<div class="clear error" name="image_error"></div>
								</div>
								<div class="clear"></div>
							</div>
				<!-- field phone -->
				<!-- field name -->
				<div class="formRow">
					<label class="formLeft" for="param_name">Tên Thành Viên:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtFullname" id="param_name" _autocheck="true" type="text" value="{!! old('txtFullname',isset($data) ? $data['fullname'] : null ) !!}"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"> </div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_phone">Số Điện Thoại:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtHandphone" id="param_phone" _autocheck="true" type="text" value="{!! old('txtHandphone',isset($data) ? $data['handphone'] : null ) !!}"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"> </div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- field address -->
				<div class="formRow">
					<label class="formLeft" for="param_address">Địa Chỉ:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtAddress" id="param_address" _autocheck="true" type="text" value="{!! old('txtAddress',isset($data) ? $data['address'] : null ) !!}"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="formRow">
					<label class="formLeft" for="param_parent_id">Cấp Người Dùng:</label>
					<div class="formRight">
						<span class="oneTwo">
							<select name="sllevel" id="param_parent_id" _autocheck="true" style="width: 446px;">
							
								<option value="1">Admin</option> 
						
								<option value="2">Quản Trị Viên</option> 
							
								<option value="3">Thành Viên</option>
						
							</select>
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"> </div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Mật khẩu -->
				<div class="formRow">
					<label class="formLeft" for="param_password">Mật khẩu:<span class="req">*</span></label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtPassword" id="param_password" _autocheck="true" type="password">
						<p> Nếu cập nhật mật khẩu thì mới nhập giá trị</p>
						</span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				<!-- Nhập lại mật khẩu -->
				<div class="formRow">
					<label class="formLeft" for="param_name">Nhập lại mật khẩu:</label>
					<div class="formRight">
						<span class="oneTwo"><input name="txtRePassword" id="param_re_password" _autocheck="true" type="password"></span>
						<span name="name_autocheck" class="autocheck"></span>
						<div name="name_error" class="clear error"></div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="formSubmit">
	           			<input type="submit" value="Cập nhật" class="redB">
	           			<input type="reset" value="Hủy bỏ" class="basic">
	           		</div>
			</fieldset>
		</form>
	</div>

</div>
@endsection()