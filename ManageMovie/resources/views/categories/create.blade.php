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

