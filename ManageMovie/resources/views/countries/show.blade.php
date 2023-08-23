<<<<<<< HEAD
@extends('layout.app')
@section('title', 'Country')
@section('content')
=======
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
{{$country->id}}<br>
{{$country->namecountry}}<br>
{{$country->zipcode}}<br>
{{$country->continents}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Name Film</th>
        <th>Director</th>
        <th>Length time</th>
        <th>Release year</th>
    </tr>
    @foreach($country->films as $film)
        <tr>
            <td>{{$film->id}}</td>
            <td>{{$film->namefilm}}</td>
            <td>{{$film->director}}</td>
            <td>{{$film->lengthtime}}</td>
            <td>{{$film->releaseyear}}</td>
        </tr>
    @endforeach
<<<<<<< HEAD
</table>
</table>
=======
</table>
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
