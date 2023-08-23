<<<<<<< HEAD
@extends('layout.app')
@section('title', 'Country')
@section('content')
<form action="/film" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 mt-3">
    <label for="namefilm" class="form-label">Name film:</label>
    <input type="text" class="form-control" id="namefilm" placeholder="Enter name film" name="namefilm">
    </div>
    <div class="mb-3 mt-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" placeholder="Choose a image" name="image">
    </div>
    <div class="mb-3 mt-3">
    <label for="director"class="form-label">Director</label>
    <input type="text" class="form-control" name="director" placeholder="Enter Director" id="director">
    </div>
    <div class="mb-3 mt-3">
    <label for="lengthtime"class="form-label">Length Time</label>
    <input type="text" class="form-control" name="lengthtime" placeholder="Enter Length time" id="lengthtime">
    </div>
    <div class="mb-3 mt-3">
    <label for="releaseyear"class="form-label">Release Year</label>
    <input type="text" class="form-control" name="releaseyear" placeholder="Enter release year" id="releaseyear">
    </div>
    <label for="country_id">Country</label>
    <select class="form-select" aria-label="Default select example" name="country_id" id="country_id">
    @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->namecountry}}</option>
        @endforeach
    </select>
    <label for="categories">Category</label>
    <select class="form-select" aria-label="Default select example" name="categories[]" id="categories" multiple>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->namecategory}}</option>
        @endforeach
    </select>
    <input type="submit" value="Create">
    <br>
</form>
@stop
=======
<form action="/film" method="post" enctype="multipart/form-data">
    @csrf
    <label for="namefilm">Name Film</label>
    <input type="text" name="namefilm" id="namefilm">
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="director">Director</label>
    <input type="text" name="director" id="director">
    <br>
    <label for="lengthtime">Length Time</label>
    <input type="text" name="lengthtime" id="lengthtime">
    <br>
    <br>
    <label for="releaseyear">Release Year</label>
    <input type="text" name="releaseyear" id="releaseyear">
    <br>
    <label for="country_id">Country</label>
    <select name="country_id" id="country_id">
        @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="categories">Category</label>
    <select name="categories[]" id="categories" multiple>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Create">
</form>
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
