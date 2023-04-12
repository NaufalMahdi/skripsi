@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
<main class="form-registration">
    <h1 class="h3 mb-3 fw-normal text-center">Daftarkan Diri Anda</h1>
    <form action="/register" method="post">
        <div style="width:100%;height:800px;">
        @csrf
<div class="form-floating">
      <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name')}}">
    <label for="name"></label>
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror 
</div>
<div class="form-floating">
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan Username Anda" required value="{{ old('username')}}">
    <label for="username"></label>
    @error('username')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror 
    </div>
<div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email Anda" required value="{{ old('email')}}">
    <label for="email"></label>
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror 
    </div>
<div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" required>
      <label for="pasword"></label>
      @error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror 

    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
  </form>
  <small class="d-block text-center mt-3">Sudah Mendaftar ? <a href="/login">Login Sekarang!</a></small>
</main>
</div>
</div>
@endsection