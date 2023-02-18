@extends('components.layout')

@section('title', $ingredient->name.' '.$ingredient->surname)

@section('content')

<h1>About the ingredient</h1>
<div class="card">
    <div class="card-header">
        {{ $ingredient->name }}
    </div>
    <div class="card-body">
        <p class="card-text">ID: {{ $ingredient->id }}.</p>
        <p class="card-text">Active ingredient? {{ $ingredient->is_active }}.</p>
    </div>
</div>
<br>
<br>


<h5>{{ $ingredient->name }}'s recipes:</h5>
@foreach($ingredient->recipes as $recipe)
<div class="card">
    <div class="card-header">
        Original title: {{ $recipe->name }}
    </div>
    <div class="card-body">
        <p class="card-text">Category: {{ $recipe->category }}.</p>
        <p class="card-text">Description and preparation method: {{ $recipe->description }}</p>
    </div>
</div>
<br>
@endforeach
<br>
<br>

<div class="btn-group" role="group">
    <div><a href="{{ route('ingredient.edit', ['id' => $ingredient->id]) }}" class="btn btn-primary">Edit</a></div>
    <form action="{{ route('ingredient.delete', ['id' => $ingredient->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<br>
<br>
@endsection