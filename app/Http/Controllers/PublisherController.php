<?php
namespace App\Http\Controllers;
use App\Models\Publisher;
use App\Models\Book;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function getAllPublisher(){
        return view('/publisher',['publishers' =>Publisher::all()]);
    }

    public function getPublisherDetail($id){
        //publisherID
        $publisher = Publisher::where('publisherid','=', $id)->get();

        $bookDetail = Book::join('publishers', 'books.publisherid', '=', 'publishers.publisherid')
              ->where('books.publisherid', $id)
              ->get('books.*');

        // dd($bookDetail);

        return view('publisherdetail',['publishers'=>$publisher, 'book'=>$bookDetail]);
    }
}
