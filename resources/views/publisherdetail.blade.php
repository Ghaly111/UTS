@extends('navbar')

@section('title', 'Publisher Detail')

@section('title2', 'Publisher Detail')

@section('body')
    <div class="content">
        <div class="Book">
            @foreach ($publishers as $p)
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="{{asset($p->image)}}" alt="Card image cap">
                    <div class="title">
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <p class="card-text1">Address: {{ $p->address }}</p>
                        <p class="card-text2">Phone: {{ $p->phone }}</p>
                        <p class="card-text2">Email: {{ $p->email }}</p>
                    </div>
                </div>
            @endforeach
            @foreach ($book as $bd)
            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="{{asset($bd->image)}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text2">Title : {{$bd->title}}</p>
                    <p class="card-text2">Author : {{$bd->author}}</p>
                    @foreach ($publishers as $p)
                        <p class="card-text2">Publisher : {{$p->name}}</p>
                    @endforeach
                    <p class="card-text2">Year : {{$bd->year}}</p>
                    <p class="card-text2">Synopsis : {{$bd->synopsis}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
