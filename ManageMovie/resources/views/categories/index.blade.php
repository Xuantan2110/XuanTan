@extends('layout.app')
@section('title', 'Country')
@section('content')
<button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/category/create">Add new Category</a></button>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Number</th>
        <th>Name of Categories</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->namecategory }}</td>
            <td>

            <button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/category/{{$category->id}}/edit">Edit</a></button>
                <form action="/category/{{ $category->id }}" method="post" style="display: inline">
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