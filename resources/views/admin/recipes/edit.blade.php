@extends('components.layout')

@section('title', 'Recipes')

@section('content')

<h1>Edit recipe "{{ $recipe->name }}"</h1>

@include('components.alert.success_message')


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('recipe.edit', ['id' => $recipe->id]) }}" method="post" 
class="row g-3" enctype="multipart/form-data">

    @csrf
    <div class="form-group">
        <label class="form-label">Name:</label>
        <input type="text" name="name" value="{{ old('name', $recipe->name) }}" 
        class="form-control @error('name') is-invalid @enderror" placeholder="Recipe name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>


    <div class="form-group">
        <label class="form-label">Ingredient(s):</label>
        <select name="ingredient_id[]" class="form-control @error('ingredient_id') is-invalid @enderror" multiple>
            @foreach($ingredients as $ingredient)
            <option value="{{ $ingredient->id }}" @if($recipe->ingredients->contains($ingredient->id))
                selected @endif >{{ $ingredient->name }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
        <label class="form-label">Category:</label>
        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" @if($category->id === $recipe->category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>


    <div class="form-group">
        <label class="form-label">Description:</label>
        <input type="text" name="description" value="{{ old('description', $recipe->description) }}" 
        class="form-control @error('description') is-invalid @enderror" 
        placeholder="Recipe description and preparation method">
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>


    <div class="form-group">
        <label class="form-label">Add picture:</label>
        <input type="file" name="image" class="form-control 
        {{--@error('image') is-invalid @enderror--}}
        ">
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>

    <div class="form-group">
        <input type="checkbox" name="is_active" class="form-check-input" 
        value="1" @if (old('is_active', $recipe->is_active)) checked @endif>
        <label class="form-check-label">Active recipe?</label>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@endsection