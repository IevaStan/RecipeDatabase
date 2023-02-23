@extends('components.layout')

@section('title', 'Recipes')

@section('content')

@include('components.alert.success_message')

<h1>Yummy {{ $recipe->name }} recipe</h1>
<br>
<br>

<div class="card" style="width: 36rem">
    @if($recipe->image)
        <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid ">
    @else
    no image
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $recipe->name }}</h5>
        <p class="card-text"></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">ID: {{ $recipe->id }}.</li>
        <li class="list-group-item">Category:
            @if($recipe->category)
            {{ $recipe->category->name }}
            @endif
        </li>
        <li class="list-group-item">Ingredients:
            <ol class="list-group list-group-numbered">
                @if($recipe->ingredients)
                @foreach($recipe->ingredients as $ingredient)
                <a href="{{ url('ingredients', ['id' => $ingredient->id]) }}" 
                class="list-group-item list-group-item-action list-group-item-secondary">
                    {{ $ingredient->name }}
                </a>
                @endforeach
                @endif
            </ol>
        </li>
        <li class="list-group-item">Description: {{ $recipe->description }}</li>
    </ul>
    <div class="card-body">
        <div class="btn-group" role="group">
            <div><a href="{{ route('recipe.edit', ['id' => $recipe->id]) }}" 
            class="btn btn-primary">Edit</a></div>
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