@extends('clients.master')
@section('title')
    Shoping-Cart
@endsection
@section('custom_css')
    <link rel="stylesheet" href="/assets/css/cart.css">
@endsection
@section('content')
    <section class="shop-cart spad">
        @if(session('update'))
            <div class="alert alert-success alert-dismissible">
                {{session('update')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('remove'))
            <div class="alert alert-success alert-dismissible">
                {{session('remove')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session('destroy'))
            <div class="alert alert-success alert-dismissible">
                {{session('destroy')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $data)
                                <form action="/update" method="get">
                                    <tr>
                                        <input type="hidden" name="rowId" value="{{$data->rowId}}">
                                        <td class="cart__product__item">
                                            <img
                                                src="{{$data->options->image}}"
                                                alt="">
                                            <div class="cart__product__item__title">
                                                <h6>{{$data->name}}</h6>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{number_format($data->price*$data->qty)}}</td>
                                        <td class="cart__quantity">
                                            <div class="pro-qty">
                                                <input class="form-control" type="number" min="1" name="quantity"
                                                       value="{{$data->qty}}">
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-update-qty">Cập nhật</button>
                                        </td>
                                        <td class="cart__close">
                                                <span>
                                                    <a onclick="return confirm('Bạn có chắc muốn xoá sản phẩm khỏi giỏ hàng ?')"
                                                       href="/remove/{{$data->rowId}}">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                </span>
                                        </td>
                                    </tr>
                                </form>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn">
                        <a href="{{route('products')}}">Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="cart__btn update__btn">
                        <a onclick="return confirm('Bạn có chắc muốn xóa tất cả giỏ hàng ?')" href="/destroy">
                            <span class="fa fa-spinner">
                            </span> Xoá tất cả
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pb-md-4">
                    <div class="discount__content">

                        <form id="form-order" name="orderForm" action="{{ route('saveOrder') }}" method="post">
                            @csrf
                            <h4 class="mb-3">Thông tin</h4>
                            <select id="sel1" name="district_id">
                                <option selected disabled hidden>Quận(Huyện)</option>
                                @foreach($districts as $district )
                                    <option
                                        value="{{$district->maqh}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                            <select class="mt-3" id="Ward" name="ward_id">
                                <option selected disabled hidden>Phường(Xã)</option>
                            </select>
                            <input name="shipAddress" type="text" class="mt-3" placeholder="Vui lòng nhập địa chỉ chi tiết">
                            <input name="shipName" type="text" class="mt-3" placeholder="Vui lòng nhập tên" value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->first_name. ' ' . \Illuminate\Support\Facades\Auth::user()->last_name : ''}}">
                            <input name="shipPhone" type="text" class="mt-3" placeholder="Vui lòng nhập số điện thoại" value="{{\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user()->phone : ''}}">
                            <input name="note" class="mt-3" type="text" placeholder="Vui lòng nhập ghi chú">
                            <input id="submit-form-order" class="d-none" type="submit">
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-2">
                    <div class="cart__total__procced">
                        <h6>Tất cả giỏ hàng</h6>
                        <ul>
                            <li>Tổng tiền<span>{{\Gloudemans\Shoppingcart\Facades\Cart::total()}}</span></li>
                        </ul>
                        <label for="submit-form-order" tabindex="0" class="primary-btn" style="cursor: pointer">Proceed to checkout</label>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script>
        const selectDistrict = $('select[name="district_id"]');
        const selectWard = $('select[name="ward_id"]');
        selectDistrict.change(function () {
            $.ajax({
                type: 'GET',
                url: '/api/ward/' + selectDistrict.val(),
                beforeSend: function () {
                    selectWard.html('<option value hidden disabled selected></option>').prop('disabled', false);
                },
                success: function (data) {
                    data.forEach(item => selectWard.append(new Option(item.name, item.xaid)));
                },
                error: function (xhr) {
                    let errors = JSON.parse(xhr.responseText).errors;
                    alert(errors.map(a => a.msg).join(';'));
                }
            });
        })

        $("#form-order").validate({
            rules: {
                district_id: {
                    required: true
                },
                ward_id: {
                    required: true
                },
                shipAddress: {
                    required: true
                },
                shipName: {
                    required: true
                },
                shipPhone: {
                    required: true
                },
                note: {
                    required: true
                }
            },
            messages: {
                district_id: {
                    required: '* Vui lòng chọn Quận(Huyện)',
                },
                ward_id: {
                    required: '* Vui lòng chọn Phường(Xã).',
                },
                shipAddress: {
                    required: '* Vui lòng nhập địa chỉ chi tiết.',
                },
                shipName: {
                    required: '* Vui lòng nhập tên.',
                },
                shipPhone: {
                    required: '* Vui lòng nhập số điện thoại.',
                },
                note: {
                    required: '* Vui lòng nhập ghi chú.',
                }
            },
            submitHandler: function (form) {
                $(form).submit();
            }
        });
    </script>
@endsection
