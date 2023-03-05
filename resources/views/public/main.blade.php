@extends('components.layoutmin')

@section('title', 'Get inspired')

@section('content')

<br>
<h1 style="text-align: center;">Our newest recipes</h1>

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
                    <img src="{{ asset('storage/' . $recipe->image) }}" class="card-img-top" style="height:200px; object-fit:cover">
                </a>
                @else
                no image
                @endif
                <div class="card-body">
                    <h5 class="card-title" style="text-align:center">
                        <a href="{{ url('public/recipes', ['id' => $recipe->id]) }}" class="list-group-item list-group-item-action">{{ $recipe->name }}</a>
                    </h5>
                    <p class="card-text" style="text-align:center">
                        <small class="text-muted">
                            Category:
                            @if($recipe->category)
                            {{ $recipe->category->name }}
                            @endif
                        </small>
                    </p>
                    <p class="list-group-item" style="text-align:justify"><b>Ingredients:</b>
                        @if($recipe->ingredients)
                        @php($i = 1)
                        @foreach($recipe->ingredients as $key => $ingredient)
                        <a href="{{ url('ingredients', ['id' => $ingredient->id]) }}" class="list-group-item-action" style="text-decoration: none;">
                            {{ $ingredient->name }}@if($i != count($recipe->ingredients)),@else.@endif
                        </a>
                        @php ($i++)
                        @endforeach
                        @endif
                    </p>
                </div>
                <div>
                    <div class="card-footer">
                        <p class="text-muted" style="text-align:justify">Description: {{ $recipe->description }}</p>
                        <p class="card-text text-muted text-center fw-lighter fst-italic">
                            <small>
                                {{--<i class="fas fa-eye"></i> 1000--}}
                                @if($recipe->is_active)
                                <i class="fas fa-square-check"></i>
                                listed
                                @else
                                <i class="fas fa-square"></i>
                                inactive
                                @endif
                                <i class="fas fa-calendar-alt"></i> {{ $recipe->created_at->format('Y-m-d') }}
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endsection