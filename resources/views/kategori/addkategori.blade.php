@extends('layouts.page')

@section('title','add kategori')

@section('content')
    <form action="{{ route('kategori.storekategori') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="namakategori" id="namakategori" placeholder="nama kategori">
        <button type="submit">kirim</button>
    </form>
@endsection