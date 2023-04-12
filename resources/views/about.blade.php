@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="width:100%;height:800px;">
    <H1>Halaman About</H1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumnail rounded-circle">
    <div style="width:100%;height:800px;">
    @endsection

