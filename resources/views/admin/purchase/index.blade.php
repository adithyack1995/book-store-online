@extends('layouts/contentNavbarLayout')

@section('title', 'Purchases')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Purchases /</span> List
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">All Purchases</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Book Name</th>
                    <th>Book Genre</th>
                    <th>Book Price</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($purchases as $purchase)
                <tr>
                    <td>{{$purchase->user->name}}</td>
                    <td>{{$purchase->book->title}}</td>
                    <td>{{$purchase->book->genre}}</td>
                    <td>{{$purchase->book->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-3">
            {!! $purchases->appends(request()->except('page'))->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

@endsection