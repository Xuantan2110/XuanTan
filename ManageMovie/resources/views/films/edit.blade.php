@extends('layout.app')
@section('title', 'Film')
@section('content')
<form action="/film/{{ $film->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
    <label for="namefilm" class="form-label">Name film:</label>
    <input type="text" class="form-control" id="namefilm" name="namefilm" value="{{$film->namefilm}}">
    </div>
    <div class="mb-3 mt-3">
    <label for="image" class="form-label">Image:</label>
    <input type="file" class="form-control" id="image" name="image" value="{{$film->image}}">
    </div>
    <div class="mb-3 mt-3">
    <label for="director" class="form-label">Director:</label>
    <input type="text" class="form-control" id="director" name="director" value="{{$film->director}}">
    </div>
    <div class="mb-3 mt-3">
    <label for="lengthtime" class="form-label">Length time:</label>
    <input type="text" class="form-control" id="lengthtime" name="lengthtime" value="{{$film->lengthtime}}">
    </div>
    <div class="mb-3 mt-3">
    <label for="releaseyear" class="form-label">Realease year:</label>
    <input type="text" class="form-control" id="releaseyear" name="releaseyear" value="{{$film->releaseyear}}">
    </div>
    <label for="country_id">Country</label>
    <select class="form-select" aria-label="Default select example" name="country_id" id="country_id">
        @foreach($countries as $country)
            <option value="{{$country->id}}" @if($country->id == $film->country_id) selected @endif>{{$country->namecountry}}</option>
        @endforeach
    </select>
    <br>
    <label for="categories">Categories</label>
    <select class="form-select" aria-label="Default select example" name="categories[]" id="categories" multiple>
        @foreach($categories as $category)
            <option value="{{$category->id}}" @if(in_array($category->id, $film->categories->pluck('id')->toArray())) selected @endif>{{$category->namecategory}}</option>
        @endforeach
    </select>
    <br>
    <input type="submit" value="Edit">
</form>
@stop