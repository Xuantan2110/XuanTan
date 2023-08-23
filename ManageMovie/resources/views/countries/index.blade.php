@extends('layout.app')
@section('title', 'Country')
@section('content')
<button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" style="text-decoration: none;" href="/country/create">Add new Country</a></button>
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Number</th>
        <th>Name of country</th>
        <th>Zip code</th>
        <th>Continents</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($countries as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->namecountry }}</td>
            <td>{{ $country->zipcode }}</td>
            <td>{{ $country->continents }}</td>
            <td>
            <button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/country/{{$country->id}}/edit">Edit</a></button>
                <form action="/country/{{ $country->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop