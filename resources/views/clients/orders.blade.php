@extends('clients.master')
@section('title')
    Orders
@endsection
@section('custom_css')
    <link rel="stylesheet" href="/assets/css/orders.css">
@endsection
@section('content')
    <section class="shop-cart spad">
        <div class="container">
            @if(session('success-msg'))
                <div class="alert alert-success alert-dismissible">
                    {{session('success-msg')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h2><strong>Đơn hàng #{{$orders->id}}</strong></h2>
            <div class="row">
                <div>Trạng thái :
                    @switch($orders->status)
                        @case(1)
                        Đang chờ
                        @break
                        @case(2)
                        Đã thanh toán
                        @break
                        @case(3)
                        Đang giao hàng
                        @break
                        @case(4)
                        Hoàn thành
                        @break
                    @endswitch
                </div>
                <div>Tên người nhận : {{$orders->shipName}}</div>
                <div>Số điện thoại : {{$orders->shipPhone}}</div>
                <div>Địa chỉ : {{$orders->district->name. '-' .$orders->ward->name. '-'. $orders->shipAddress}}</div>
                <div>Ghi chú : {{$orders->note}}</div>
            </div>
            <?php
            $totalPrice = 0
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Tổng</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders->orderDetails as $orderDetail)
                                <?php
                                if (!empty($orderDetail)) {
                                    $totalPrice += $orderDetail->unitPrice * $orderDetail->quantity;
                                }
                                ?>
                                <tr>
                                    <td class="cart__product__item">
                                        <img
                                            src="{{explode(',',$orderDetail->product->image)[0]}}"
                                            alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$orderDetail->product->name}}</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">{{number_format($orderDetail->product->price)}} đ</td>
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            {{$orderDetail->quantity}}
                                        </div>
                                    </td>
                                    <td>{{number_format($orderDetail->unitPrice*$orderDetail->quantity)}} đ</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-6">
                    <strong>Tổng tiền : {{number_format($totalPrice)}} đ</strong>
                </div>
                @if($orders->status == 1)
                    <div class="col-6">
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="hide"
                                       value="option1" checked>
                                <label class="form-check-label" for="inlineRadio1">Thanh toán ngay khi nhận hàng
                                    (COD)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="show"
                                       value="option2">
                                <label class="form-check-label" for="inlineRadio2">Các hình thức thanh toán khác</label>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-3" id="pay" style="display: none">
                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                <i class="fab fa-paypal" style="margin-right: 20px"></i> Thanh toán
                                                Paypal
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                             aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body d-flex justify-content-center mt-2">
                                                <div id="paypal-button"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fas fa-university" style="margin-right: 20px"></i>Chuyển khoản
                                                ngân hàng
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                             aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td colspan="2" class="text-center">Thông tin thanh toán</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><strong>Tên ngân hàng</strong></td>
                                                        <td><i class="fas fa-clone"></i> MB Bank</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Tên tài khoản</strong></td>
                                                        <td><i class="fas fa-clone"></i> Hoàng Đắc Phương</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Số tài khoản</strong></td>
                                                        <td><i class="fas fa-clone"></i> 093094203809</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Nội dung chuyển khoản</strong></td>
                                                        <td><i class="fas fa-clone"></i> Thanh toán đơn hàng
                                                            #{{$orders->id}} </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif
            </div>
        </div>
        </div>
    </section>
@endsection
@section('custom_js')
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
        paypal.Button.render({
            env: 'sandbox', // Or 'production'
            // Set up the payment:
            // 1. Add a payment callback
            payment: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/paypal/create-payment', {
                    orderId: {{$orders->id}},
                })
                    .then(function (res) {
                        // 3. Return res.id from the response
                        return res.id;
                    });
            },
            // Execute the payment:
            // 1. Add an onAuthorize callback
            onAuthorize: function (data, actions) {
                // 2. Make a request to your server
                return actions.request.post('/paypal/execute-payment', {
                    paymentID: data.paymentID,
                    payerID: data.payerID
                })
                    .then(function (res) {
                        console.log(res)
                        // alert('Payment Success !!')
                        // location.reload();
                        // 3. Show the buyer a confirmation message.
                    });
            }
        }, '#paypal-button');
    </script>
    <script>
        $('#hide').click(function () {
            $('#pay').hide();
        });
        $('#show').click(function () {
            $('#pay').show();
        })
    </script>
@endsection
