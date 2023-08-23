<<<<<<< HEAD
@extends('layout.app')
@section('title', 'Country')
@section('content')
<form action="/category/{{ $category->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
    <label for="namecategory" class="form-label">Name category:</label>
    <input type="text" class="form-control" id="namecategory" name="namecategory" value="{{$category->namecategory}}">
    </div>
    <br>
    <input type="submit" value="Edit">
</form>
@stop
=======
<form action="/category/{{ $category->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="namecategory">Name</label>
    <input type="text" name="namecategory" id="namecategory" value="{{$category->namecategory}}">
    <br>
    <input type="submit" value="Edit">
</form>
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
