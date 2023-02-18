@extends('components.layout')

@section('title', 'Show category')

@section('content')

<h1>{{ $category->name }} category</h1>
<div class="card">
    <div class="card-header">
        {{ $category->name }}
    </div>
    <div class="card-body">
        <p class="card-text">ID: {{ $category->id }}.</p>
        <p class="card-text">
            <span> Active category?:
                @if($category->is_active) {{'Yes'}}
                @else{{'No'}}
                @endif
            </span>
        </p>
    </div>
</div>
<br>
<br>


<h5>Recipes in {{ $category->name }} category:</h5>
@foreach($category->recipes as $recipe)
<div class="card">
    <div class="card-header">
        <a href="{{ url('recipes', ['id' => $recipe->id]) }}" 
        class="list-group-item list-group-item-action">Name: {{ $recipe->name }}</a>
    </div>
    <div class="card-body">
        <ol class="list-group list-group-numbered">
            Ingredients:
            @if($recipe->ingredients)
                @foreach($recipe->ingredients as $ingredient)
                <a href="{{ url('ingredients', ['id' => $ingredient->id]) }}" 
                class="list-group-item list-group-item-action list-group-item-secondary">{{ $ingredient->name }}</a>
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
    <div><a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a></div>
    <form action="{{ route('category.delete', ['id' => $category->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</div>
<br>
<br>

@endsection