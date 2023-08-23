<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films'; 
    protected $fillable = ['namefilm','image', 'director', 'lengthtime', 'releaseyear', 'country_id'];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
