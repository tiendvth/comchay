@extends('clients.master')
@section('title')
    {{$product->name}}
@endsection
@section('custom_css')
    <link rel="stylesheet" href="/assets/css/product-detail.css">
@endsection

@section('banner')
@endsection


@section('content')
    <div class="container">
        <div class="card">
            @if(session('add'))
                <div class="alert alert-success alert-dismissible">
                    {{session('add')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container-fluid">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-0"><img
                                    src="{{explode(',',$product->image)[0]}}"
                                    alt="#" width="100%" height="400px" style="object-fit: cover">
                            </div>
                            @for($i = 1; $i < count(explode(',',$product->image)); $i++)
                            <div class="tab-pane" id="pic-{{$i}}"><img
                                    src="{{explode(',',$product->image)[$i]}}"
                                    alt="#" width="100%" height="400px" style="object-fit: cover">
                            </div>
                            @endfor
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-0" data-toggle="tab">
                                    <img
                                        src="{{explode(',',$product->image)[0]}}"
                                        alt="#" width="100%" height="73px" style="object-fit: cover"></a>
                            </li>
                            @for($i = 1; $i < count(explode(',',$product->image)); $i++)
                            <li class="{{explode(',',$product->image)[0] ? 'active' : ''}}"><a data-target="#pic-{{$i}}" data-toggle="tab">
                                    <img
                                        src="{{explode(',',$product->image)[$i]}}"
                                        alt="#" width="100%" height="73px" style="object-fit: cover"></a>
                            </li>
                            @endfor
                        </ul>
                    </div>
                    <div class="col-md-6 details">
                           <h3 class="product-title">{{$product->name}}</h3>
                           <p class="product-description">{!! html_entity_decode($product->description) !!}</p>
                           <h4 class="price">Giá: {{number_format($product->price)}} đ</h4>
                           <div class="action"><a href="{{route('addCart',$product->id)}}">
                                   <button class="add-to-cart btn btn-default" type="button">add to cart <i class="fas fa-cart-arrow-down"></i></button>
                               </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
    </div>
    <div class="fb-comments" data-href="https://alla.com.vn/" data-numposts="3"></div>
@endsection
@section('custom_js')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0" nonce="mfZuNA77"></script>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1632614030377920";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, "script", "facebook-jssdk"));
    </script>
@endsection
