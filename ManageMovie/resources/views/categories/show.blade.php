{{$category->id}}<br>
{{$category->namecategory}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Name Film</th>
        <th>Director</th>
        <th>Length time</th>
        <th>Release year</th>
    </tr>
    @foreach($category->films as $film)
        <tr>
            <td>{{$film->id}}</td>
            <td>{{$film->namefilm}}</td>
            <td>{{$film->director}}</td>
            <td>{{$film->lengthtime}}</td>
            <td>{{$film->releaseyear}}</td>
        </tr>
    @endforeach
</table>