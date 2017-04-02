@extends('layouts.client.master')
@section('content')

    <div id="container">
        <div id="content">
            <div class="clearfix">
                <form action=""></form>
                <table class="table table-hover ">
                    <h3>Giỏ Hàng</h3>
                    <thead>
                        <tr>
                            <th>Hình Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Số Lượng</th>
                            <th>Hành Động</th>
                            <th>GIá Tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cartItem as $item)
                            <input type="hidden" name="product_id" value="{{ $item->id }}">
                            <tr>
                                <td><img style="height: 100px;" title="product" src="{{ asset('public/upload/product/'.$item->options->img) }}" alt=""></td>
                                <td>{{ $item->name }}</td>
                                <td width="50px">
                                    {{ Form::open(['route' => ['cart.update',$item->rowId], 'method' => 'PUT']) }}
                                        <input name="qty" type="text" value="{{ $item->qty }}">

                                </td>
                                <td>
                                    <input style="float: left" type="submit" class="btn btn-success " value="Sửa">
                                    {{ Form::close() }}
                                    <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input class="btn btn-danger" type="submit" value="Xóa">
                                    </form>
                                </td>
                                <td>{{ $item->price}}.000 VNĐ</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3">
                                Tổng tiền giỏ hàng: {{ number_format(Cart::subtotal(),3,".",".") }} VNĐ <br>
                            </td>
                            <td colspan="2">Số lượng sản phẩm trong giỏ hàng: {{ Cart::count() }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="pull-right">
                    <a href="{{ url('checkout') }}"><button type="submit" class="btn btn-default">Xác Nhận</button></a>
                </div>
            </div>
        </div>
    </div>

@stop