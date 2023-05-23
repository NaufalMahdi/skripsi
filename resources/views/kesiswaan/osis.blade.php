@extends('layouts.main')

@section('content')
    <div style="width:100%;height:20px;">
    </div>
    <center>
        <h3>OSIS</h3>
    </center>
    <div style="width:100%;height:200px;">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $osis->title }}</h2>
                <img src="{{ asset('uploads/' . $osis->image) }}" class="img-fluid mt-3">


                {!! $osis->body !!}

            </div>
        </div>
        <div style="width:100%;height:200px;">
        </div>
    </div>
@endsection
