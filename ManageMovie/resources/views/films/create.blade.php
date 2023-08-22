<form action="/film" method="post" enctype="multipart/form-data">
    @csrf
    <label for="namefilm">Name Film</label>
    <input type="text" name="namefilm" id="namefilm">
    <br>
    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="director">Director</label>
    <input type="text" name="director" id="director">
    <br>
    <label for="lengthtime">Length Time</label>
    <input type="text" name="lengthtime" id="lengthtime">
    <br>
    <br>
    <label for="releaseyear">Release Year</label>
    <input type="text" name="releaseyear" id="releaseyear">
    <br>
    <label for="country_id">Country</label>
    <select name="country_id" id="country_id">
        @foreach($countries as $country)
            <option value="{{$country->id}}">{{$country->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="categories">Category</label>
    <select name="categories[]" id="categories" multiple>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="Create">
</form>