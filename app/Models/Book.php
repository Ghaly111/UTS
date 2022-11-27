<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['bookid','publisherid', 'title', 'author', 'year', 'synopsis', 'image'];
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function category(){
        return $this->belongsTo(Categorie::class);
    }

    public function bookcat(){
        return $this->belongsToMany(BookCat::class);
    }
}
