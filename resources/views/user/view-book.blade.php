@extends('layouts/contentNavbarLayout')

@section('title', 'Book Detailed View')

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
    <h4 class="py-3 mb-4"><span class="card-header">{{$book->title}}</span>
    </h4>
    <div class="col-md-6 col-lg-4 mb-3">
        <div class="card h-100">
            <img class="card-img-top" src="{{$book->image}}" alt="Card image cap" />
            <div class="card-body">
                <p class="card-text">
                    Author : {{$book->author}}
                </p>
                <p class="card-text">
                    Quantity :{{$book->quantity}}
                </p>
                <h6 class="card-title">
                    Price : Rs.{{$book->price}}
                </h6>
                <h6 class="card-text">
                    Rating : {{$book->rating ? $book->rating->review : 0}}<span class="mdi mdi-star"></span>
                </h6>
                <div class="input-group">
                    <button class="btn btn-outline-primary waves-effect" type="button" id="open-review" data-book-id="{{$book->id}}">Add Review</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6">
    <!-- add review modal -->
    <div class="modal fade review" id="reviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-primary heading5" id="addReviewModal">Add a review </h5>
                    <button type="button" class="btn-close close-add-review-modal"></button>
                </div>
                <div class="modal-body">
                    <form id="review-save" action="" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" id="bookID" name="book_id" value="">
                        <div class="form-row">
                            <label for="" class="form-label">Select stars</label>
                            <div class="rating-sec">
                                <div class="rate">
                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row mb-0">
                            <label for="" class="form-label">Review</label>
                            <textarea id="review-description" cols="30" rows="10" name="reviewDescription" class="form-control report-js-validation reviewDescription"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-primary cancel-add-review-modal" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-primary" id="save-review">Publish</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection