<<<<<<< HEAD
@extends('layout.app')
@section('title', 'Country')
@section('content')
<form action="/category" method="post">
    @csrf
    <div class="mb-3 mt-3">
    <label for="namecategory" class="form-label">Name category:</label>
    <input type="text" class="form-control" id="namecategory" placeholder="Enter name category" name="namecategory">
    </div>
    <input type="submit" value="Create">
</form>
@stop
=======
<form action="/category" method="post">
    @csrf
    <label for="namecategory">Name Category</label>
    <input type="text" name="namecategory" id="namecategory">
    <br>
    <input type="submit" value="Create">
</form>
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
