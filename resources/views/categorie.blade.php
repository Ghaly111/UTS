@extends('navbar')

@section('title', 'Categorie')

@section('title2', 'Categorie')

@section('body')
    <div class="content">
        <div class="content">
            <div class="Book">
                @foreach ($books as $b)
                    <div class="card" style="width: 15rem;">
                        <img class="card-img-top" src="{{asset($b->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$b->title}}</h5>
                            <p class="card-text1">by</p>
                            <p class="card-text2">{{$b->author}}</p>
                            <a class="btn btn-primary" href="/bookDetail/{{$b->bookid}}">Detail</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
