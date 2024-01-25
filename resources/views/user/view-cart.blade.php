@extends('layouts/contentNavbarLayout')

@section('title', 'Shopping Cart')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="card-header">Shopping Cart</span>
</h4>
<div class="row mb-5">

    @foreach($cartItems as $cartItem)
    <div class="col-md-6 col-lg-4 mb-3 cart-{{$cartItem->id}}">
        <div class="card h-100">
            <a href="{{route('user.book.show',$cartItem->books->id)}}">
                <img class="card-img-top" src="{{$cartItem->books->image}}" alt="Card image cap" />
            </a>
            <div class="card-body">
                <h5 class="card-title">{{$cartItem->books->title}}</h5>
                <h6 class="card-title">
                    {{$cartItem->books->author}}
                </h6>
                <h6 class="card-title">
                    Rs.{{$cartItem->books->price}}
                </h6>
                <p class="card-text">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon41">Qty</span>
                    <input type="text" id="item-quantity{{$cartItem->id}}" class="form-control" name="quantity" value="{{$cartItem->quantity}}" aria-describedby="button-addon2">
                    <button class="btn btn-outline-primary waves-effect" type="button" id="update-item-count" data-cart-id="{{$cartItem->id}}">Update</button>
                </div>
                <div class="input-group">
                    <button class="btn btn-outline-primary waves-effect" type="button" id="remove-item" data-cart-id="{{$cartItem->id}}">Remove Item</button>
                </div>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection