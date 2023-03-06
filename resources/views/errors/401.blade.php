@extends('components.layoutmin')
@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('content')

<div class="d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <h1 class="display-1 fw-bold">401</h1>
        <p class="fs-3"> <span class="text-danger fw-bold">Opps!</span> Unauthorized.</p>
        <p class="lead">
            Through a series of highly sophisticated and complex algorithms, this system has determined that you are not presently authorized to use this system function. It could be that you simply mistyped a password, or, it could be that you are some sort of interplanetary alien-being that has no hands and, thus, cannot type. If I were a gambler, I would bet that a cat (an orange tabby named Sierra or Harley) somehow jumped onto your keyboard and forgot some of the more important pointers from those typing lessons you paid for. Based on the actual error encountered, I would guess that the feline in question simply forgot to place one or both paws on the appropriate home keys before starting. Then again, I suppose it could have been a keyboard error caused by some form of cosmic radiation; this would fit nicely with my interplanetary alien-being theory. If you think this might be the cause, perhaps you could create some sort of underground bunker to help shield yourself from it. I don't know that it will work, but, you will probably feel better if you try something.
        </p>
        <a href="/" class="btn btn-primary">Go Home</a>
    </div>
</div>

@endsection