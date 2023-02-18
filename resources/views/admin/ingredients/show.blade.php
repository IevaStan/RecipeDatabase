@extends('components.layout')

@section('title', $ingredient->name.' '.$ingredient->surname)

@section('content')

<h1>{{ $ingredient->name }} ingredient</h1>
<div class="card">
    <div class="card-header">
        {{ $ingredient->name }}
    </div>
    <div class="card-body">
        <p class="card-text">ID: {{ $ingredient->id }}.</p>
        <p class="card-text">Active ingredient?
            <span>
                @if($ingredient->is_active) {{'Yes'}}
                @else{{'No'}}
                @endif
            </span>
        </p>
    </div>
</div>
<br>
<br>


<h5>Recipes with {{ $ingredient->name }}:</h5>
@foreach($ingredient->recipes as $recipe)
<div class="card">
    <div class="card-header">
        <a href="{{ url('recipes', ['id' => $recipe->id]) }}" 
        class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
    </div>
    <div class="card-body">
        <a href="{{ url('categories', ['id' => $recipe->category_id]) }}" 
        class="list-group-item list-group-item-action">Category: {{ $recipe->category }}.</a><br>
        <ol class="list-group list-group-numbered">
            Ingredients:
            @if($recipe->ingredients)
                @foreach($recipe->ingredients as $ingredient)
                <p class="list-group-item list-group-item-action list-group-item-secondary">{{ $ingredient->name }}</p>
                @endforeach
            @endif
        </ol>
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