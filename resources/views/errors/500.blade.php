@extends('components.layoutmin')
@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Server Error'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">500</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> Server Error.</p>
        <p class="lead">
            Internal server error. Please try again later. That's all we know.
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection