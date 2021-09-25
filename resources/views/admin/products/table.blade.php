@extends('admin.master')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <h2 class="">Danh sách sản phẩm</h2>
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
                                    <select name="category" class="custom-select" id="category">
                                        <option hidden selected disabled>Tất cả sản phẩm</option>
                                        @foreach(\App\Models\Category::all() as $category)
                                            <option
                                                value="{{$category->id}}" {{$category->id == $categories ? 'selected' : ''}}>
                                                {{$category->name}}
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
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left mb-2">
                            <a class="btn btn-success" href="{{route('createProduct')}}">Add <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <table class="mb-0 table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th style="width:10%">Tên</th>
                        <th>Ảnh</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Sửa, Xoá</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $data)
                        <tr>
                            <td class="text-center">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td><img src="{{explode(',', $data->image)[0]}}" height="75"
                                     width="75" alt=""/></td>
                            <td>{{$data->category->name}}</td>
                            <td>{{number_format($data->price)}} đ</td>
                            <td>
                                <a class="btn btn-primary mr-2" href="{{route('editProduct', $data->id)}}"><i
                                        class="fas fa-edit"></i></a>
                                <a type="submit" href="{{route('deleteProduct', $data->id)}}"
                                   class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá ?')">
                                    <i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-4">
                        @include('admin.components.pagination',['list' => $products])
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
                $('#filterForm').submit()
            } else {
                submit = true
            }
        })
        $('#category').change(function () {
            $('#filterForm').submit()
        })
        $('#sort').change(function () {
            $('#filterForm').submit()
        })
    </script>
@endsection
