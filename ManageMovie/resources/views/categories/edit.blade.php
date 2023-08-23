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
