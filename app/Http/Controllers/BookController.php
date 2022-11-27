<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCat;
use App\Models\Categorie;
use App\Models\Publisher;
use CreatePublishersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeView()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function bookView($id)
    {
        $booksdetail = Book::where('bookid','=', $id)->get();
        $booksd = $booksdetail [0];
        $idpublisher = $booksd->publisherid;
        $publishername = Publisher::where('publisherid','=', $idpublisher)->get();
        return view('detail', [
            "detailbook"=>$booksdetail, "publish"=>$publishername
        ]);
    }

    public function getCategoryDetail($id){
        $bookcatdet = BookCat::where('categoryid', '=', $id)->get();
        $bookcat = $bookcatdet[0];
        //1
        // $x = BookCat::join('book_cats','book_cats.bookid','=',$bookcat)->get();
        $bookDetail = Categorie::join('book_cats', 'categories.categoryid', '=', 'book_cats.categoryid')
              ->join('books', 'books.bookid', '=', 'book_cats.bookid')->where('book_cats.categoryid', $id)
              ->get();


        return view ('categorie', ['books'=>$bookDetail]);
    }

    // public function categorieView(Categorie $categorie){
    //     return view('categorie', ['category'=>$categorie, 'book'=>$categorie->book]);
    // }

    public function publisherView(){
        $publisher = Publisher::all();
        return view('publisher', );
    }

    public function contactView(){
        return view('contact');
    }

}
