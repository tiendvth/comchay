@extends('admin.master')
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4">
                        <h2>Danh sách người dùng</h2>
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
                                    <select name="role" class="custom-select" id="role">
                                        <option hidden selected disabled>Tất cả</option>
                                        <option
                                            value="{{\App\Enums\Role::ADMIN}}" {{$role == \App\Enums\Role::ADMIN ? 'selected' : ''}}>
                                            Admin
                                        </option>
                                        <option
                                            value="{{\App\Enums\Role::USER}}" {{$role == \App\Enums\Role::USER ? 'selected' : ''}}>
                                            User
                                        </option>
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
                <a href="{{route('createUser')}}" class="btn btn-success mb-3">Thêm <i class="fa fa-plus"></i></a>
                @if(session()->get('status'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success! {{ session()->get( 'user' ) }}</strong>
                        {{ session()->get( 'status' ) }}
                    </div>
                @endif
                <table class="mb-0 table table-bordered">

                    <tr>
                        <th>Id</th>
                        <th>Họ Tên</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Sửa, xoá</th>
                    </tr>


                    @foreach($list as $listUser)
                        <tr>
                            <td>{{$listUser->id}}</td>
                            <td>{{$listUser->first_name . ' ' . $listUser->last_name }}</td>
                            <td>{{$listUser->email}}</td>
                            <td>{{$listUser->address}}</td>
                            <td>
                                <a href="{{route('editUser',$listUser->id)}}">
                                    <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                </a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa người dùng này ?')"
                                   href="{{route('deleteUser',$listUser->id)}}">
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </a></td>
                        </tr>
                    @endforeach

                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-4">
                        @include('admin.components.pagination',['list' => $list])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        let submit = false
        $('#search').click(function () {
            if (submit) {
                $('filterForm').submit()
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
    </script>
@endsection
