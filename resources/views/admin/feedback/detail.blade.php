@extends('admin.master')
@section('title')
    Detail Feed Back
@endsection
@section('custom_css')
    <style>
        .wrap-fback p i {
            opacity: .6;
        }
    </style>
@endsection
@section('content')
    <div class="row main-card mb-3 card">
        <div class="container">
            <div class="card-body"><h4 class="">Feed Back Detail #{{$details->id}}</h4>
                @if ($message = \Illuminate\Support\Facades\Session::get('success'))
                    <div class="alert alert-success">
                        <p class="m-0">{{ $message }}</p>
                    </div>
                @endif
                <div class="mt-4 wrap-fback" style="font-size: 15px">
                    <p class="mb-2">
                        <i class="fas fa-user mr-1" style="font-size: 16px"></i> Name:  {{$details->name}}
                    </p>
                    <p class="mb-2">
                        <i class="fas fa-envelope mr-1"></i> Email:  {{$details->email}}
                    </p>
                    <p class="mb-2"><i class="fas fa-phone mr-1"></i> Phone:  {{$details->phone}}</p>
                    <p class="ml-4"> Subject: {{$details->subject}}</p>
                    <p class="mb-2"><i class="fas fa-comments mr-1"></i></i> Message:  {{$details->message}}</p>
                </div>
           </div>
        </div>
    </div>
@endsection
