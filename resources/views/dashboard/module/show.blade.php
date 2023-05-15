@extends('dashboard.layouts.main')

@section('container')
<div class="container">
	<div class="row my-3">
		<div class="col-lg-8">
		<h2 class="mb-3">{{ $post->title }}</h2>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Ke Halaman Posts</a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Hapus</a>
		
			@if ($post->image)
			<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->kategori->name }}" class="img-fluid mt-3">

			@else

			<img src="https://source.unsplash.com/1200x400?{{ $post->kategori->name }}" alt="{{ $post->kategori->name }}" class="img-fluid mt-3">
			{!! $post->body !!}
            <p>Kategori : <a href="/kategories">{{ $post->kategori->name }} </a></p>

			@endif
			

		</div>
	</div>
</div>

@endsection

