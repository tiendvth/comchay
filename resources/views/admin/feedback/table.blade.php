@extends('admin.master')
@section('title')
    Feed Back
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body">
                <div class="row">
                    <div class="col-4"><h2 class="">List Feed Back</h2></div>
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
                                    <select name="subject" class="custom-select" id="subject">
                                        <option hidden selected disabled>All</option>
                                        @foreach(\App\Enums\Subject::getValues() as $item)
                                            <option
                                                value="{{$item}}" {{$subject == $item ? 'selected' : ''}}>
                                                {{\App\Enums\Subject::getDescription($item)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-4 form-group">
                                    <select name="sort" class="custom-select" id="sort">
                                        <option hidden selected disabled>Sort</option>
                                        <option value="1" {{$sort == 1 ? 'selected' : ''}}>Mới nhất</option>
                                        <option value="2" {{$sort == 2 ? 'selected' : ''}}>Cũ nhất</option>
                                    </select>
                                </div>
                            </div>
                        </form>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th style="width: 110px;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fback as $data)
                        <tr>
                            <td class="text-center">{{$data->id}}</td>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->subject}}</td>
                            <td>
                                <a type="submit" href="{{route('deleteFBack', $data->id)}}" style="padding: 7px 9px;"
                                   class="btn btn-danger mr-2" onclick="return confirm('Bạn có chắc muốn xoá ?')">
                                    <i class="fas fa-trash-alt" style="font-size: 17px"></i></a>
                                <a style="padding: 7px 8px;" type="button" href="{{route('detailFBack', $data->id)}}" class="btn btn-primary">
                                    <i class="fas fa-info-circle" style="font-size: 17px"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                <div class="row justify-content-end mt-3">
                    <div class="col-4">
                        @include('admin.components.pagination',['list' => $fback])
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
        $('#subject').change(function () {
            $('#filterForm').submit()
        })
        $('#sort').change(function () {
            $('#filterForm').submit()
        })
    </script>
@endsection
