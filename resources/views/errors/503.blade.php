@extends('components.layoutmin')
@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">503</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> Service Unavailable.</p>
        <p class="lead">
            The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection