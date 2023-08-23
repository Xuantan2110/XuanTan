@extends('layout.app')
@section('title', 'Country')
@section('content')
<form action="/country" method="post">
    @csrf
    <div class="mb-3 mt-3">
    <label for="namecountry" class="form-label">Name country:</label>
    <input type="text" class="form-control" id="namecountry" placeholder="Enter name country" name="namecountry">
    </div>
    <div class="mb-3 mt-3">
    <label for="zipcode" class="form-label">Zip code:</label>
    <input type="text" class="form-control" id="zipcode" placeholder="Enter Zip code" name="zipcode">
    </div>
    <div class="mb-3 mt-3">
    <label for="continents" class="form-label">Continets:</label>
    <input type="text" class="form-control" id="continents" placeholder="Enter Continent" name="continents">
    </div>
    <input type="submit" value="Create">
</form>
@stop