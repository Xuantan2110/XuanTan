<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $table = 'books'; 
    protected $fillable = ['namefilm', 'director', 'lengthtime', 'releaseyear', 'country_id'];
    public function countries()
    {
        return $this->belongsTo(Country::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
