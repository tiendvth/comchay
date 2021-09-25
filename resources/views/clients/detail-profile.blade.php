@extends('clients.master')
@section('title')
    Thông tin tài khoản
@endsection
@section('custom_css')
    <style>
        body {
            background-color: #eff0f4;
        }
        .now-detail-profile {
            width: 80%;
            background-color: white;
            position: relative;
            margin: 35px auto;
        }
        .now-detail-profile .header-user-profile {
            font-size: 18px;
            color: #00c6d7;
            font-weight: 700;
            padding: 16px 15px;
            border-bottom: 1px solid #ebebeb;
            background: #f5f5f5;
        }
        .user-profile-update {
             padding: 20px 30px;
             position: relative;
        }
        .user-profile-update:after {

            background-color: #d7d7d7;
        }
        .row-profile {
            padding: 15px 0;
        }
    </style>
@endsection

@section('banner')

@endsection

@section('content')
    <div class="now-detail-profile">
        <div class="header-user-profile text-center">Thông tin người dùng</div>
        <div class="user-profile-update row">
            <div class="col-4 row-profile align-items-center">
                <div class="profile-item-title txt-bold">Họ tên:</div>
                <div class="profile-item-info">{{$list->first_name . ' ' . $list->last_name }}</div>
            </div>
            <div class="col-4 row-profile align-items-center">

                <div class="profile-item-title txt-bold"> <i class="fas fa-envelope" style="margin-right: 10px"></i>Địa chỉ email:</div>
                <div class="profile-item-info">{{$list->email}}</div>
            </div>
            <div class="col-4 row-profile align-items-center">
                <div class="profile-item-title txt-bold"><i class="fas fa-phone-square" style="margin-right: 10px"></i>Số điện thoại:</div>
                <div class="profile-item-info">
                    {{$list->phone}}
                </div>
            </div>
            <div class="col-4 row-profile align-items-center">
                <div class="profile-item-title txt-bold"><i class="fas fa-map-marker-alt" style="margin-right: 10px"></i>Địa chỉ:</div>
                <div class="profile-item-info">{{$list->address}}</div>
            </div>
            <div class="col-4 row-profile align-items-center">
                <div class="profile-item-title txt-bold">User Name:</div>
                <div class="profile-item-info">
                    {{$list->username}}
                </div>
            </div>
        </div>
    </div>
    @endsection



@section('custom_js')

@endsection
