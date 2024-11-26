@extends('layouts.page')

@section('title','add menu')

@section('content')
    <form action="{{ route('menu.storemenu') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="nama" id="nama" placeholder="nama">
        <input type="text" name="harga" id="harga" placeholder="harga">
        <select name="kategori" id="kategori">
            @foreach ($kategori as $kategoridata)
                <option value="{{ $kategoridata->namakategori }}">{{ $kategoridata->namakategori }}</option>
            @endforeach
        </select>
        <input type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi">
        <input type="text" name="foto" id="foto" placeholder="foto">
        <button type="submit">kirim</button>
    </form>
@endsection