<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table='countries';
    protected $fillable=['namecountry', 'zipcode', 'continents'];
    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
