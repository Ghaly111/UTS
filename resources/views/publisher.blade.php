@extends('navbar')

@section('title', 'Publisher')

@section('body')
    <div class="content">
        <div class="Book">
            @foreach ($publishers as $p)
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="{{ asset($p->image) }}" alt="Card image cap">
                    <br>
                    <div>
                        <h5 class="card-title">{{ $p->name }}</h5>
                        <p class="card-text1">Address: {{ $p->address }}</p>
                        <p class="card-text2">Phone: {{ $p->phone }}</p>
                        <p class="card-text2">Email: {{ $p->email }}</p>
                    </div>
                    <div class="button">
                    <a href="/publisher/detail/{{$p->publisherid}}" class="btn btn-dark mt-2 justify-content-center">Publisher Detail</a>
                </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
