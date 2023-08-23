@extends('layout.app')
@section('title', 'Films')
@section('content')
<button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/film/create">Add new film</a></button>
<div class="table-responsive">
<table class="table table-bordered">
<thead>
    <tr>
        <th>Id</th>
        <th>Name Film</th>
        <th>Image</th>
        <th>Director</th>
        <th>Length Time</th>
        <th>Release Year</th>
        <th>Country</th>
        <th>Category</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    @foreach($films as $film)
        <tr>
            <td>{{ $film->id }}</td>
            <td>{{ $film->namefilm }}</td>
            <td>{{ $film->image }}</td>
            <td>{{ $film->director }}</td>
            <td>{{ $film->lengthtime }}</td>
            <td>{{ $film->releaseyear }}</td>
            <td><a style="text-decoration: none; color:black;" href="/countries/{{$film->country->id}}">{{$film->country->namecountry}}</a></td>
            <td>
                @foreach($film->categories as $category)
                    <a style="text-decoration: none;color:black;" href="/categories/{{$category->id}}">{{$category->namecategory}}</a>
                @endforeach
            </td>
            <td>
            <button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/film/{{$film->id}}/edit">Edit</a></button>
                <form action="/film/{{ $film->id }}" method="post" style="display: inline">
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