@extends('components.layoutmin')

@section('title', 'Get inspired')

@section('content')

<h1>Our newest recipes</h1>

@include('components.alert.success_message')

<br>
<br>


<div class="container">
    <div class="row row-cols-4">

        @foreach($recipes as $recipe)

        <div class="col-3 mb-3">
            <div class="card h-100">
                @if($recipe->image)
                <a href="{{ url('public/recipes', ['id' => $recipe->id]) }}">
                    <img src="{{ asset('storage/' . $recipe->image) }}" class="card-img-top">
                </a>
                @else
                no image
                @endif
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ url('public/recipes', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
                    </h5>
                    <p class="card-text">
                        <small class="text-muted">
                            Category:
                            @if($recipe->category)
                            {{ $recipe->category->name }}
                            @endif
                        </small>
                    </p>
                    <p class="card-text">Ingredients:
                    <ol class="list-group list-group-numbered">
                        @if($recipe->ingredients)
                        @foreach($recipe->ingredients as $ingredient)
                        <small>
                            <a href="{{ url('ingredients', ['id' => $ingredient->id]) }}" class="list-group-item list-group-item-action list-group-item-secondary">
                                {{ $ingredient->name }}
                            </a>
                        </small>
                        @endforeach
                        @endif
                    </ol>
                    </p>
                </div>
                <div>
                    <div class="card-footer">
                        <p class="text-muted">Description: {{ $recipe->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection