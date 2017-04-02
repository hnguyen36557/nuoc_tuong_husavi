@extends('layouts.client.master')
@section('content')

    <div id="container">
        <div id="content">
            <div class="clearfix">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>Hình Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>GIá Tiền</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <hr>
                <div class="col-md-6">
                    <h3>Thông Tin Khách Hàng</h3>
                    {{ Form::open(['route' => 'checkout.postShipping', 'method' => 'post']) }}

                    <div class="form-group">
                            {{ Form::label('customer_name', 'Tên Khách Hàng') }}
                            {{ Form::text('customer_name', null, array('class' => 'form-control', 'style' => 'width:500px')) }}
                        </div>

                    <div class="form-group">
                            {{ Form::label('customer_email', 'Email Khách Hàng') }}
                            {{ Form::email('customer_email', null, array('class' => 'form-control', 'style' => 'width:500px')) }}
                        </div>

                    <div class="form-group">
                            {{ Form::label('customer_phone', 'Số Điện Thoại') }}
                            {{ Form::text('customer_phone', null, array('class' => 'form-control', 'style' => 'width:500px')) }}
                        </div>

                    <div class="form-group">
                            {{ Form::label('address', 'Địa Chỉ') }}
                            {{ Form::text('address', null, array('class' => 'form-control', 'style' => 'width:500px')) }}
                        </div>

                    {{ Form::submit('Xác Nhận', array('class' => 'button success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>




@stop