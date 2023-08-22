@extends('layout.app')
@section('title', 'Films')
@section('content')
<button style="margin-bottom: 10px;" ><a style="text-decoration: none;" href="/film/create">Add new film</a></button>
<div class="table-responsive">
<table class="table table-bordered">
<thead>
      <tr>
        <th>Number</th>
        <th>Name of Film</th>
        <th>Director</th>
        <th>Length Time</th>
        <th>Release Year</th>
      </tr>
    </thead>
    <tbody>
    @foreach($films as $film)
        <tr>
            <td>{{ $film->id }}</td>
            <td>{{ $film->namefilm }}</td>
            <td>{{ $film->director }}</td>
            <td>{{ $film->lengthtime }}</td>
            <td>{{ $film->releaseyear }}</td>
             <td>
                @foreach($film->categories as $category)
                    <a href="/categories/{{$category->id}}">{{ $category->name }}</a>
                @endforeach
            </td>
            <td>
                <a href="/films/{{$film->id}}/edit">Edit</a>
                <form action="/films/{{ $film->id }}" method="post" style="display: inline">
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