@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>


                <p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>

                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->kategori->name }}" class="img-fluid mt-3">
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}"
                        alt="{{ $post->kategori->name }}" class="img-fluid mt-3">
                    {!! $post->body !!}
                    <p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>
                @endif

                {!! $post->body !!}
                <a href="/posts">Back to Posts</a>
            </div>
        </div>
        <div style="width:100%;height:200px;">
        </div>
    </div>
@endsection
