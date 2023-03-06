@extends('components.layout')

@section('title', 'Ingredients')

@section('content')
<h1>Add a new ingredient</h1>

<form action="{{ url('admin/ingredients/create') }}" method="post" class="row g-3">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @csrf
    <div class="form-group">
        <label class="form-label">Name:</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
        placeholder="Ingredient name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>
    
    <div class="form-group">
        <input type="checkbox" name="is_active" class="form-check-input" 
        value="1" @if (old('is_active')) checked @endif>
        <label class="form-check-label">Active ingredient?</label>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
@endsection