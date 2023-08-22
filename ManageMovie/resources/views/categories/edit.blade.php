<form action="/category/{{ $category->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="namecategory">Name</label>
    <input type="text" name="namecategory" id="namecategory" value="{{$category->namecategory}}">
    <br>
    <input type="submit" value="Edit">
</form>