<form action="/country/{{ $country->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="namecountry">Name</label>
    <input type="text" name="namecountry" id="namecountry" value="{{$country->namecountry}}">
    <br>
    <label for="zipcode">Zip code</label>
    <input type="text" name="zipcode" id="zipcode" value="{{$country->zipcode}}">
    <br>
    <label for="name">Continents</label>
    <input type="text" name="continents" id="continents" value="{{$country->continents}}">
    <br>
    <input type="submit" value="Edit">
</form>