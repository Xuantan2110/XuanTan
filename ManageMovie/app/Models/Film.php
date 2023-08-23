<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'films'; 
<<<<<<< HEAD
    protected $fillable = ['namefilm','image','director', 'lengthtime', 'releaseyear', 'country_id'];
    public function country()
=======
    protected $fillable = ['namefilm','image', 'director', 'lengthtime', 'releaseyear', 'country_id'];
    public function countries()
>>>>>>> 4e15b85e9a8473ce682778742c3b78088fb8144f
    {
        return $this->belongsTo(Country::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
