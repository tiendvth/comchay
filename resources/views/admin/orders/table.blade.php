@extends('admin.master')
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4">
                        <h2>Danh sách đặt hàng</h2>
                    </div>
                    <div class="col-8">
                        <form id="filterForm">
                            <div class="row justify-content-end">
                                <div class="col-4 form-group input-group">
                                    <input type="text" class="form-control" name="search">
                                    <div class="input-group-append">
                                        <span class="btn input-group-text" id="search"><i
                                                class="fas fa-search"></i></span>
                                    </div>
                                </div>
                                <div class="col-4 form-group">
                                    <select name="status" class="custom-select" id="role">
                                        <option hidden selected disabled>Tất cả</option>
                                        @foreach(\App\Enums\Status::getValues() as $type)
                                            <option
                                                value="{{$type}}" {{$status && $status == $type ? 'selected' : ''}}>
                                                {{\App\Enums\Status::getDescription($type)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4 form-group">
                                    <select name="sort" class="custom-select" id="sort">
                                        <option hidden selected disabled>Loại</option>
                                        <option value="1" {{$sort == 1 ? 'selected' : ''}}>Mới nhất</option>
                                        <option value="2" {{$sort == 2 ? 'selected' : ''}}>Cũ nhất</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if(session()->get('status'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Thành công !</strong> {{ session()->get( 'status' ) }}
                    </div>
                @endif
                <?php $orderTotal = 0; ?>
                <table class="mb-0 table table-bordered">
                    <tr>
                        <th>Chọn</th>
                        <th>Id</th>
                        <th>Tên người nhận</th>
                        <th>Địa chỉ</th>
                        <th>Giá đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Trạng thái</th>
                        <th>Actions</th>
                    </tr>


                    @foreach($orders as $order)
                        <?php
                        if (!empty($order)) {
                            $orderTotal += $order->totalPrice;
                        }
                        ?>
                        <tr>
                            <td><input class="checkbox_choice" type="checkbox" value="{{$order->id}}"></td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->shipName}}</td>
                            <td>{{$order->shipAddress}}</td>
                            <td>{{number_format($order->totalPrice)}} đ</td>
                            <td>{{date_format($order->created_at,'d/m/Y')}}</td>
                            <td>@switch($order->status)
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
                                @endswitch</td>
                            <td>
                                <a href="{{route('showOrder', $order->id)}}"><button class="btn btn-primary"><i class="fa fa-info-circle"></i></button></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này ?')"
                                   href="{{route('deleteOrder',$order->id)}}">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a></td>
                        </tr>
                    @endforeach
                    <tr><td colspan="8" class="text-right"><strong> Tổng : {{number_format($orderTotal)}} đ</strong></td></tr>

                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-2">
                        <form id="filter-date">
                            <select name="date" id="date" class="custom-select" style="width: 100%">
                                <option selected disabled hidden>Lọc theo thời gian</option>
                                <option value="1" {{$date && $date == 1 ? 'selected' : ''}}>Đơn hàng trong ngày</option>
                                <option value="2" {{$date && $date == 2 ? 'selected' : ''}}>Đơn hàng trong tháng
                                </option>
                                <option value="3" {{$date && $date == 3 ? 'selected' : ''}}>Đơn hàng trong năm</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-2">
                        @include('admin.components.pagination',['list' => $orders])
                    </div>
                </div>
                <div class="row">
                    <div>
                        <span style="margin-right: 30px">Chọn tất cả <input id="check_all" type="checkbox"
                                                                          style="transform: translateY(2px)"></span>
                        <select name="order_status" id="order_status" class="custom-select" style="width: 130px">
                            <option disabled hidden selected>Thay đổi trạng thái</option>
                            @foreach(\App\Enums\Status::getValues() as $type)
                                <option value="{{$type}}">{{\App\Enums\Status::getDescription($type)}}</option>
                            @endforeach
                            <option value="5">Xóa đơn hàng</option>
                        </select>
                        <button class="btn btn-primary btn_submit" style="width: 120px">Cập nhật</button>
                        <form action="{{route('updateStatus')}}" id="form_update_status" method="post"
                              style="width: 0;height: 0;overflow: hidden!important;">
                            @csrf
                            <div style="width: 0;height: 0;overflow: hidden!important;">
                                <input type="text" name="array_id" id="array_id">
                                <input type="text" name="desire" id="desire">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('#check_all').change(function () {
                if ($(this).is(':checked')) {
                    $('.checkbox_choice').prop("checked", true)
                } else {
                    $('.checkbox_choice').prop("checked", false)
                }
            })
            $('#order_status').change(function () {
                $('#desire').val(this.value)
            })
            $('.btn_submit').click(function () {
                var checkboxs = document.querySelectorAll('.checkbox_choice')
                var items = []
                for (let i = 0; i < checkboxs.length; i++) {
                    if (checkboxs[i].checked) {
                        items.push(checkboxs[i].value)
                    }
                }
                $('#array_id').val(JSON.stringify(items))
                if ($('#desire').val() === '') {
                    alert('Vui lòng chọn thao tác để tiếp tục')
                } else {
                    $('#form_update_status').submit()
                }
            })
            // $('.btn_delete').click(function () {
            //     var checkboxs = document.querySelectorAll('.checkbox_choice')
            //     var items = []
            //     for (let i = 0; i < checkboxs.length; i++) {
            //         if (checkboxs[i].checked) {
            //             items.push(checkboxs[i].value)
            //         }
            //     }
            //     $('#delete_id').val(JSON.stringify(items))
            //     $('#delete_all').submit()
            // })
            let submit = false
            $('#search').click(function () {
                if (submit) {
                    $('#filterForm').submit()
                } else {
                    submit = true
                }
            })
            $('#role').change(function () {
                $('#filterForm').submit()
            })
            $('#sort').change(function () {
                $('#filterForm').submit()
            })
            $('#date').change(function () {
                $('#filter-date').submit()
            })
        })

    </script>
@endsection
