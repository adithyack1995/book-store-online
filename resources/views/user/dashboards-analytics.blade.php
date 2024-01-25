@extends('layouts/contentNavbarLayout')

@section('title', 'Dashboard - Analytics')

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
<div class="row mb-5">
    <h4 class="py-3 mb-4"><span class="card-header">Recommended Books</span>
    </h4>
    @foreach($recommendedBooks as $book)
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
            <a href="{{route('user.book.show',$book->id)}}">
                <img class="card-img-top" src="{{$book->image}}" alt="Card image cap" />
            </a>
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">
                    {{$book->author}}
                </p>
                <h6 class="card-title">
                    Rs.{{$book->price}}
                </h6>
                <a class="btn btn-outline-primary" id="add-to-cart" data-user="{{auth()->user()->id}}" data-id="{{$book->id}}">Add to Cart</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection