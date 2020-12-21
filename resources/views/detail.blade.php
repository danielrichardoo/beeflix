@extends('layout')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-3 d-flex justify-content-center">
            <img src="{{ asset('/img/'.$movie_data->photo) }}">
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{$movie_data->title}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>{{$movie_data->desc}}</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>Rating: {{$movie_data->rating}}/5</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h5>Kategori: {{$movie_data->category->name}}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="row"><h5>Episodes</h5></div>
            <div class="row">
                @foreach ($episode_data as $eps)
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{$eps->episode}}
                    </div>
                    <div class="card-body">
                        {{$eps->title}}
                    </div>
                </div>
                @endforeach
            </div>
            {{$episode_data->links()}}
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Recomendation</h3>
        </div>
        @foreach ($recomendation as $recomen)
        <a href="{{ url('/detail/'.$recomen->id)}}" style="text-decoration: none;color:black;">
            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{$recomen->title}}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('/img/'.$recomen->photo) }}">
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
