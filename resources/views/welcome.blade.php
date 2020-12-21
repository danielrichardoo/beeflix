@extends('layout')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="form-row">
                <form class="form-inline" role="form" method="GET" action="{{ url('/') }}">
                    @csrf
                    <label class="mr-3" for="genre"><h5>Filter :</h5></label>
                    <select class="custom-select mr-2" id="genre" name="genre">
                      <option selected>All</option>
                      <option value="drama">Drama</option>
                      <option value="kids">Kids</option>
                      <option value="tvshow">Tv Show</option>
                    </select>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    @if ($status == "all" || $status == "drama")
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Drama</h5>
        </div>
        @foreach ($movie_data as $mov)
        @if ($mov->genre_id == 1)
        <a href="{{ url('/detail/'.$mov->id)}}" style="text-decoration: none;color:black;">
            <div class="col-md-3 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{$mov->title}}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('/img/'.$mov->photo) }}">
                    </div>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
    @endif

    @if ($status == "all" || $status == "kids")
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Kids</h5>
        </div>
        @foreach ($movie_data as $mov)
        @if ($mov->genre_id == 2)
        <a href="{{ url('/detail/'.$mov->id)}}" style="text-decoration: none;color:black;">
            <div class="col-md-3 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{$mov->title}}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('/img/'.$mov->photo) }}">
                    </div>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
    @endif

    @if ($status == "all" || $status == "tvshow")
    <div class="row mt-5">
        <div class="col-md-12">
            <h5>Tv Show</h5>
        </div>
        @foreach ($movie_data as $mov)
        @if ($mov->genre_id == 3)
        <a href="{{ url('/detail/'.$mov->id)}}" style="text-decoration: none;color:black;">
            <div class="col-md-3 mt-2">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        {{$mov->title}}
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('/img/'.$mov->photo) }}">
                    </div>
                </div>
            </div>
        </a>
        @endif
        @endforeach
    </div>
    @endif
</div>
@endsection
