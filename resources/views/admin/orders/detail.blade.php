@extends('admin.master')
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row mb-3">
                    <h4><strong>Đơn hàng #{{$orders->id}}</strong></h4>
                    <div class="row mb-5">
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
                    <table class="mb-0 table table-bordered">
                        <thead>
                        <tr class="text-center">
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
                        <tr class="text-center">
                            <td style="width: 500px">
                               <div class="row">
                                   <div class="col-3">
                                       <img src="{{explode(',',$orderDetail->product->image)[0]}}" alt="" width="100%">
                                   </div>
                                   <div class="col-9">
                                       <h6>{{$orderDetail->product->name}}</h6>
                                   </div>
                               </div>
                            </td>
                            <td>{{number_format($orderDetail->product->price)}} đ</td>
                            <td>{{$orderDetail->quantity}}</td>
                            <td>{{number_format($orderDetail->unitPrice*$orderDetail->quantity)}} đ</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="4"><strong>Tổng đơn hàng: {{number_format($totalPrice)}} đ</strong></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection
