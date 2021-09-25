@extends('admin.master')
@section('content')
    <div class="row main-card m-3 card">
        <div class="container p-5">
            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong> {{ implode('', $errors->all(':message')) }}</strong>
                </div>
            @endif
            <h2 class="mb-3">
                @if($data)
                    Cập nhật người dùng
                @else
                    Thêm mới người dùng
                @endif
            </h2>
            <form action="" method="post" id="form-user">
                @if($data)
                    @method('put')
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên:</label>

                            <input value="{{$data ? $data->first_name : ''}}" type="text" class="form-control"
                                   placeholder="Tên" name="first_name" >
                            @error('first_name')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Họ:</label>
                            <input value="{{$data ? $data->last_name : ''}}" type="text" class="form-control"
                                   placeholder="Họ" name="last_name">
                            @error('last_name')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <input value="{{$data ? $data->address : ''}}" type="text" class="form-control"
                                   placeholder="Địa chỉ" name="address">
                            @error('address')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Địa chỉ email:</label>
                            <input value="{{$data ? $data->email : ''}}" type="text" class="form-control"
                                   placeholder="Địa chỉ email" name="email">
                            @error('email')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Số điện thoại:</label>

                            <input value="{{$data ? $data->phone : ''}}" type="text" class="form-control"
                                   placeholder="Số điện thoại" name="phone">
                            @error('phone')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên tài khoản:</label>

                            <input value="{{$data ? $data->username : ''}}" type="text" class="form-control"
                                   placeholder="Tên tài khoản" name="username">
                            @error('username')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Role:</label>
                            <select name="role" class="custom-select">
                                <option hidden selected disabled>Role</option>
                                <option value="{{\App\Enums\Role::ADMIN}}" {{$data && $data->role == \App\Enums\Role::ADMIN ? 'selected' : ''}}>Admin</option>
                                <option value="{{\App\Enums\Role::USER}}" {{$data && $data->role == \App\Enums\Role::USER ? 'selected' : ''}}>User</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mật khẩu:</label>

                            <input value="{{$data ? $data->password : ''}}" type="password" class="form-control"
                                   placeholder="Mật khẩu" name="password">
                            @error('password')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nhập lại mật khẩu:</label>

                            <input value="{{$data ? $data->password : ''}}" type="password" class="form-control"
                                   placeholder="Nhập lại mật khẩu" name="password_confirmation" >
                            @error('password_confirmation')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end mt-3">
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('custom_js')

@endsection
