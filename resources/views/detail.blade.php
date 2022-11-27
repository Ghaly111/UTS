@extends('navbar')

@section('title', 'Book Detail')

@section('title2', 'Book Detail')

@section('body')
    <div class="content">
        <div class="Book">
            @foreach ($detailbook as $bd)
            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="{{asset($bd->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text2">Title : {{$bd->title}}</p>
                    <p class="card-text2">Author : {{$bd->author}}</p>
                    @foreach ($publish as $p)
                        <p class="card-text2">Publisher : {{$p->name}}</p>
                    @endforeach
                    {{-- <p class="card-text2">Publisher : {{$bd->publisher->name}}</p> --}}
                    <p class="card-text2">Year : {{$bd->year}}</p>
                    <p class="card-text2">Synopsis : {{$bd->synopsis}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
