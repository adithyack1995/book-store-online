@extends('layouts/contentNavbarLayout')

@section('title', 'Books List')

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Books /</span> List
</h4>

<!-- Basic Bootstrap Table -->
<div class="card">
    <h5 class="card-header">All Books</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->genre}}</td>
                    <td>{{$book->price}}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('books.show',$book->id)}}"><i class="mdi mdi-eye-outline me-1"></i> View</a>
                                <a class="dropdown-item" href="{{route('books.edit',$book->id)}}"><i class="mdi mdi-pencil-outline me-1"></i> Edit</a>
                                <a class="dropdown-item delete-book" href="#" data-id="{{$book->id}}"><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="px-3">
            {!! $books->appends(request()->except('page'))->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <!-- Modal -->
    <div class="modal fade" id="deleteBookRow" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form id="formConfirmationPopup">
                        <div class="modal-body text-center popup-mt pb-3">
                            <h4 class="modal-title" id="confirm_message">Confirm Delete</h4>
                            <p class="mb-0 text-gray">Are you sure want to delete?</p>
                            <input type="hidden" name="bookID" id="bookID" value="">
                        </div>
                        <div class="modal-footer d-flex justify-content-center mb-4 border-0">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                            <button type="button" class="btn btn-primary" id="submitConfirmationPopup">Yes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection