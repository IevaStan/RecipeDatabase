@extends('components.layoutmin')

@section('title', 'Recipe preview')

@section('content')

@include('components.alert.success_message')
<br>
<h1 class="text-center">Yummy {{ $recipe->name }} recipe</h1>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col text-center">
            @if($recipe->image)
            <img src="{{ asset('storage/' . $recipe->image) }}" class="rounded" style="width:100%; height:100%; object-fit:cover">
            @else
            no image
            @endif
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title text-center">{{ $recipe->name }}</h5>
                        <p class="card-text"></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Recipe No.: {{ $recipe->id }}.</li>
                    <li class="list-group-item">Category:
                        @if($recipe->category)
                        <a href="{{ url('categories', ['id' => $recipe->category_id]) }}" class="list-group-item list-group-item-action">
                            {{ $recipe->category->name }}
                        </a>
                        @endif
                    </li>
                    <li class="list-group-item">Ingredients:
                        <ol class="list-group list-group-numbered">
                            @if($recipe->ingredients)
                            @foreach($recipe->ingredients as $ingredient)
                            <a href="{{ url('ingredients', ['id' => $ingredient->id]) }}" class="list-group-item list-group-item-action list-group-item-secondary">
                                {{ $ingredient->name }}
                            </a>
                            @endforeach
                            @endif
                        </ol>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Description and preparation method</h2>
                </div>
                <div>
                    <div class="card-footer">
                        <p class="card-text">{{ $recipe->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection