@extends('components.layout')

@section('title', 'Show category')

@section('content')

<h1>Recipe category</h1>
<div class="card">
    <div class="card-header">
        {{ $category->name }}
    </div>
    <div class="card-body">
        <p class="card-text">
            <span>Active category?: {{ $category->is_active }}</span>
        </p>
    </div>
</div>
<br>
<br>


<h5>Category "{{ $category->name }}" recipes:</h5>
@foreach($category->recipes as $recipe)
<div class="card">
    <div class="card-header">
        Name: {{ $recipe->name }}
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