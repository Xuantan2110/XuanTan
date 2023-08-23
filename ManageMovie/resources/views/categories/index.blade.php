@extends('layout.app')
@section('title', 'Country')
@section('content')
<<<<<<< HEAD
<button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/category/create">Add new Category</a></button>
=======
<button style="margin-bottom: 10px;" ><a style="text-decoration: none;" href="/category/create">Add new Category</a></button>
<div class="table-responsive">
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Number</th>
        <th>Name of Categories</th>
<<<<<<< HEAD
        <th>Action</th>
=======
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->namecategory }}</td>
            <td>
<<<<<<< HEAD

            <button style="margin-bottom: 10px;" ><a style="text-decoration: none;color:black;" href="/category/{{$category->id}}/edit">Edit</a></button>
=======
                <a href="/category/{{$category->id}}/edit">Edit</a>
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
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