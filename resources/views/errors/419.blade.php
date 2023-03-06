@extends('components.layoutmin')
@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">419</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> Page Expired.</p>
        <p class="lead">
            Sorry, your session has expired. Please refresh and try again.
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection