<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Category;
use App\Models\BookCat;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategoryDetail(Categorie $categorie){
        // $booksdetail = Book::where('bookid','=', $categorie)->get();
        return view ('categorie', ['categories'=>$categorie, 'books'=>$categorie->book]);}
}
