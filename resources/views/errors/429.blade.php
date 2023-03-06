@extends('components.layoutmin')
@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Too Many Requests'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">429</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> Too Many Requests.</p>
        <p class="lead">
            Try again later. If the problem continues, contact the site owner.
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection