@extends('components.layoutmin')
@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">403</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> Forbidden.</p>
        <p class="lead">
            The page you're looking for does't exist or you don't have permission to access this page or perform this action. <br>
            Please note, <span class="text-danger fw-bold">edit</span> and <span class="text-danger fw-bold">delete</span> functions are only allowed for administrators! Please ask an admin to grant permission
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection