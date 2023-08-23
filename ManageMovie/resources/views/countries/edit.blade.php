@extends('layout.app')
@section('title', 'Country')
@section('content')
<form action="/country/{{ $country->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
    <label for="namecountry" class="form-label">Name country:</label>
    <input type="text" class="form-control" id="namecountry" name="namecountry" value="{{$country->namecountry}}">
    </div>
    <div class="mb-3 mt-3">
    <label for="zipcode" class="form-label">Zip code:</label>
    <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{$country->zipcode}}">
    </div>
    <div class="mb-3 mt-3">
    <label for="continents" class="form-label">Continent:</label>
    <input type="text" class="form-control" id="continents" name="continents" value="{{$country->continents}}">
    </div>
    <br>
    <input type="submit" value="Edit">
</form>
@stop