@extends('components.layoutmin')

@section('title', 'Get inspired')

@section('content')

<h1>Our recipes</h1>

@include('components.alert.success_message')

<div class="row">
    <div class="col">
        <form action="{{ url('public/recipes') }}" method="get">
            <div class="form-group">

                <div class="form-group">
                    <label class="form-label">Search recipe by name:</label>
                    <input type="text" name="name" value="{{ $name }}" class="form-control" placeholder="Recipe name">
                </div>

                <label class="form-label">Select the category:</label>
                <select name="category_id" class="form-control">
                    <option value="">---</option>
                    @foreach($categories as $category)
                    <option @if($category->id == $category_id) selected @endif
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
                    <a href=" {{ url('public/recipes') }}" class="btn btn-secondary">Clear filter</a>
                </div>
            </div>
            <br>
            <br>

        </form>
    </div>
</div>

<table class="table">
    <tr>
        <th scope="col" width="100">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Ingredient(s)</th>
        <th scope="col">Category</th>
        <th scope="col">Description</th>
    </tr>
    @foreach($recipes as $recipe)
    <tr>
        <th scope="row">{{ $recipe->id }}</th>
        <td class="list-group-flush">
            <a href="{{ url('public/recipes', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
        </td>
        <td>
            <div class="col-md-4 px-0">
                @if($recipe->image)
                <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid ">
                @else
                no image
                @endif
            </div>
        </td>
        <td>
            @if($recipe->ingredients)

            @foreach($recipe->ingredients as $ingredient)
            {{ $ingredient->name }} <br>
            @endforeach

            @endif
        </td>
        <td>
            @if($recipe->category)
            {{ $recipe->category->name }}
            @endif
        </td>
        <td>{{ $recipe->description }}</td>


    </tr>
    @endforeach
</table>
<div class="row">
    <div class="col">
        {{ $recipes->links()}}
    </div>
</div>
@endsection