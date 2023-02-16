@extends('components.layout')

@section('title', 'Recipes')

@section('content')

@include('components.alert.success_message')

<h1>Recipe description</h1>
<div class="card">
    <div class="card-header">
        {{ $recipe->name }}
    </div>
    <div class="card-body">
        <p class="card-text">ID: {{ $recipe->id }}.</p>
        <p class="card-text">Category {{ $recipe->category }}.</p>
        <p class="card-text">Description: {{ $recipe->description }}.</p>
    </div>
</div>
<br>
<br>

<div class="btn-group" role="group">
    <div><a href="{{ route('recipe.edit', ['id' => $recipe->id]) }}" class="btn btn-primary">Edit</a></div>
    <form action="{{ route('recipe.delete', ['id' => $recipe->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<br>
<br>
@endsection