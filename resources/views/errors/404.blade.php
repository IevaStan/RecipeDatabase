@extends('components.layoutmin')
@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">404</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> You found our 404 page.</p>
        <p class="lead">
            The page you're looking for does't exist.
            This is not a fault, just an accident that was not intentional. However, we doubt that this is the page you're looking for and we apologize profusely for it.
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection