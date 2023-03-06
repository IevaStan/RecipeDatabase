@extends('components.layout')

@section('title', 'Show category')

@section('content')

<h1 class="text-center">{{ $category->name }} category</h1>
<br>
<div class="card">
    <div class="card-header">
        <span class="fw-bold">Category name: </span>{{ $category->name }}
    </div>
    <div class="card-body">
        <p class="card-text"><span class="fw-bold">No.: </span>{{ $category->id }}.</p>
        <p class="card-text">
            <span> <span class="fw-bold">Active category?: </span>
                @if($category->is_active) {{'Yes'}}
                @else{{'No'}}
                @endif
            </span>
        </p>
    </div>
</div>

<br>
<div class="text-center">
    <div class="btn-group" role="group">
        <div><a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-primary">Edit</a></div>
        <form action="{{ route('category.delete', ['id' => $category->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
<br>
<br>

<h3 class="text-center">Recipes in {{ $category->name }} category:</h3>
<br>
<div class="container">
    <div class="row row-cols-4">
        @foreach($category->recipes as $recipe)
        <div class="col-3 mb-3">
            <div class="card h-100">
                @if($recipe->image)
                <a href="{{ url('admin/recipes', ['id' => $recipe->id]) }}">
                    <img src="{{ asset('storage/' . $recipe->image) }}" class="card-img-top" style="height:200px; object-fit:cover">
                </a>
                @else
                no image
                @endif
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center">
                        <a href="{{ url('admin/recipes', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
                    </h5>
                    <p class="card-text" style="text-align:center">
                        <small class="text-muted">
                            Category:
                            @if($recipe->category)
                            {{ $recipe->category->name }}
                            @endif
                        </small>
                    </p>
                    <p class="list-group-item" style="text-align:justify"><span class="fw-bold">Ingredients:</span>
                        @if($recipe->ingredients)
                        @php($i = 1)
                        @foreach($recipe->ingredients as $key => $ingredient)
                        <a href="{{ url('admin/ingredients', ['id' => $ingredient->id]) }}" class="list-group-item-action" style="text-decoration: none;">
                            {{ $ingredient->name }}@if($i != count($recipe->ingredients)),@else.@endif
                        </a>
                        @php ($i++)
                        @endforeach
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <br>
        @endforeach
    </div>
</div>
<br>
<br>
@endsection