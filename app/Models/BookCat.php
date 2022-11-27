<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCat extends Model
{
    use HasFactory;
    // public function category(){
    //     return $this->belongsToMany(Categorie::class);
    // }

    // public function book(){
    //     return $this->belongsToMany(Book::class);
    // }
    protected $table = 'categories';
}
