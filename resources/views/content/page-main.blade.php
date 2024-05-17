@extends('layouts/layout')

@section('title', 'Main')
@section('page-description', '')

@section('page-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
    <script src="{{asset('assets/js/main.js')}}"></script>
@endsection

@section('content')
<div class="main-page">
    <div class="container mt-5">
        <h2 class="page-title">Welcome back!</h2>
        <p class="page-subtitle"></p>
        <div class="mx-auto" style="max-width: 800px">
            <div class="card mt-5">
                <form id="tracking_form">
                    <div class="card-body">
                        <div class="form-text text-danger d-none" id="error_msg">Please fill the form</div>
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter a Name" required>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="col form-group mb-3">
                                <label class="form-label">Track:</label>
                                <select class="form-select" id="type" required>
                                    <option value=""></option>
                                    <option value="Start">Start</option>
                                    <option value="End">End</option>
                                </select>
                            </div>
                            <div class="col form-group mb-3">
                                <label class="form-label" for="time">Time:</label>
                                <input type="text" class="form-control timepicker" id="time" required>
                            </div>
                            <div class="col form-group mb-3">
                                <label class="form-label" for="date">Date:</label>
                                <input type="text" class="form-control datepicker" id="date" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Memo(Optional)" class="form-control" rows="8" id="memo"></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-secondary btn-lg" id="cancel_btn">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary btn-lg ms-3" id="submit_btn">
                            Submit
                            <i class="fa fa-spinner fa-spin ms-1 d-none"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection