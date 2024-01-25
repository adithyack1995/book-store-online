@extends('layouts/contentNavbarLayout')

@section('title', ' Vertical Layouts - Forms')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Books/</span> Edit Books</h4>

<!-- Basic Layout -->
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('books.update',$book->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-floating form-floating-outline mb-4 col-md-6 col-lg-4 mb-3">
                        <img class="card-img-top" src="{{$book->image}}" alt="Card image cap">
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="title" id="basic-default-fullname" value="{{$book->title}}" />
                        <label for="basic-default-fullname">Title</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="author" id="basic-default-company" value="{{$book->author}}" />
                        <label for="basic-default-company">Author</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="file" class="form-control" name="image" id="basic-default-fullname" />
                        <label for="basic-default-fullname">Image</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="genre" id="basic-default-company" value="{{$book->genre}}" />
                        <label for="basic-default-company">Genre</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="price" id="basic-default-company" value="{{$book->price}}" />
                        <label for="basic-default-company">Price</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="quantity" id="basic-default-company" value="{{$book->quantity}}" />
                        <label for="basic-default-company">Quantity</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection