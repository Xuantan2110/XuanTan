<form action="/country" method="post">
    @csrf
    <label for="namecountry">Name</label>
    <input type="text" name="namecountry" id="namecountry">
    <br>

    <label for="zipcode">Zip code</label>
    <input type="text" name="zipcode" id="zipcode">
    <br>

    <label for="continents">Continents</label>
    <input type="text" name="continents" id="continents">
    <br>
    <input type="submit" value="Create">
</form>