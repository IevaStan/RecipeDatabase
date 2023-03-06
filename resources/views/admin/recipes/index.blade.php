@extends('components.layout')

@section('title', 'Recipes')

@section('content')

<h1>Our recipes</h1>

@include('components.alert.success_message')

<div class="row">
    <div class="col">
        <form action="{{ url('admin/recipes') }}" method="get">
            <div class="form-group">

                <div class="form-group">
                    <label class="form-label">Search recipe by name:</label>
                    <input type="text" name="name" value="{{ $name }}" class="form-control" placeholder="Recipe name">
                </div>

                <label class="form-label">Select the category:</label>
                <select name="category_id" class="form-control">
                    <option value="">---</option>
                    @foreach($categories as $category)
                    <option class="dropdown-item" @if($category->id == $category_id) selected @endif
                        value="{{ $category->id }}">{{ $category->name }}
                    </option>
                    @endforeach
                </select>
                <br>
            </div>

            <div class="btn-group" role="group">
                <div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
                <div>
                    <a href=" {{ url('admin/recipes') }}" class="btn btn-secondary">Clear filter</a>
                </div>
            </div>
            <br>
            <br>

        </form>
    </div>
</div>

<div class="row">
    <div class="col"> <a href="{{ url('admin/recipes/create') }}" class="btn btn-primary">Create</a> </div>
</div>

<table class="table">
    <tr>
        <th scope="col" width="100">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Ingredient(s)</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
        <th scope="col" width="100">Edit</th>
        <th scope="col" width="100">Delete</th>
    </tr>
    @foreach($recipes as $recipe)
    <tr>
        <th scope="row">{{ $recipe->id }}</th>
        <td class="list-group-flush">
            <a href="{{ url('admin/recipes', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
        </td>
        <td>
            <div class="col-md-4 px-0" style="width:100%">
                @if($recipe->image)
                <a href="{{ url('admin/recipes', ['id' => $recipe->id]) }}">
                    <img src="{{ asset('storage/' . $recipe->image) }}" class="rounded" style="width:100%; height:100%; object-fit:cover">
                </a>
                @else
                no image
                @endif
            </div>
        </td>
        <td style="text-align:justify">
            @if($recipe->ingredients)
            @php($i = 1)
            @foreach($recipe->ingredients as $key => $ingredient)
            <a href="{{ url('admin/ingredients', ['id' => $ingredient->id]) }}" class="list-group-item-action" style="text-decoration: none">
                {{ $ingredient->name }}@if($i != count($recipe->ingredients)),@else.@endif
            </a>
            @php ($i++)
            @endforeach
            @endif
        </td>
        <td>
            @if($recipe->category)
            <a href="{{ url('admin/categories', ['id' => $category->id]) }}" class="list-group-item-action" style="text-decoration: none">
                {{ $recipe->category->name }}
            </a>
            @endif
        </td>
        <td style="text-align:justify">{{ $recipe->description }}
        </td>
        <td>
            <a href="{{ route('recipe.edit', ['id' => $recipe->id]) }}" class="btn btn-primary">Edit</a>
        </td>
        <td>
            <form action="{{ route('recipe.delete', ['id' => $recipe->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="row">
    <div class="col">
        {{ $recipes->links()}}
    </div>
</div>
@endsection