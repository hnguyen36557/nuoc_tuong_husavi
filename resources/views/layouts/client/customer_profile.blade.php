@extends('layouts.client.master')
@section('content')

    <div class="row">
        <div class="small-6 small-centered columns">
            {{ Form::open(['route' => 'checkout.postShipping', 'method' => 'post']) }}

            <div class="form-group">
                {{ Form::label('customer_name', 'Tên Khách Hàng') }}
                {{ Form::text('customer_name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('customer_email', 'Email Khách Hàng') }}
                {{ Form::email('customer_email', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('customer_phone', 'Số Điện Thoại') }}
                {{ Form::text('customer_phone', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('address', 'Địa Chỉ') }}
                {{ Form::text('address', null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Xác Nhận', array('class' => 'button success')) }}
            {{ Form::close() }}
        </div>
    </div>


@stop