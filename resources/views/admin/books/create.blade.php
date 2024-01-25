@extends('layouts/contentNavbarLayout')

@section('title', ' Vertical Layouts - Forms')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Books/</span> Add Books</h4>

<!-- Basic Layout -->
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('books.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="title" id="basic-default-fullname" placeholder="Title" />
                        <label for="basic-default-fullname">Title</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="author" id="basic-default-company" placeholder="Author" />
                        <label for="basic-default-company">Author</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="file" class="form-control" name="image" id="basic-default-fullname" placeholder="Image" />
                        <label for="basic-default-fullname">Image</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="genre" id="basic-default-company" placeholder="Genre" />
                        <label for="basic-default-company">Genre</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="price" id="basic-default-company" placeholder="Price" />
                        <label for="basic-default-company">Price</label>
                    </div>
                    <div class="form-floating form-floating-outline mb-4">
                        <input type="text" class="form-control" name="quantity" id="basic-default-company" placeholder="Quantity" />
                        <label for="basic-default-company">Quantity</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection