@extends('components.layout')

@section('title', 'Recipes')

@section('content')

@include('components.alert.success_message')

<h1>Recipe description</h1>
<br>
<br>

<div class="card" style="width: 18rem;">
    @if($recipe->image)
    <img src="{{ asset($recipe->image) }}" class="card-img-top" alt="recipe picture">
    @else
    no image
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $recipe->name }}</h5>
        <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">ID: {{ $recipe->id }}.</li>
        <li class="list-group-item">Category: {{ $recipe->category }}.</li>
        <li class="list-group-item">Description: {{ $recipe->description }}</li>
    </ul>
    <div class="card-body">
        <div class="btn-group" role="group">
            <div><a href="{{ route('recipe.edit', ['id' => $recipe->id]) }}" class="btn btn-primary">Edit</a></div>
            <form action="{{ route('recipe.delete', ['id' => $recipe->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
<br>
<br>



@endsection