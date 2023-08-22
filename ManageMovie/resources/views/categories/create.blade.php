<form action="/category" method="post">
    @csrf
    <label for="namecategory">Name Category</label>
    <input type="text" name="namecategory" id="namecategory">
    <br>
    <input type="submit" value="Create">
</form>