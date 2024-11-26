@extends('layouts.page')

@section('title','data kategori')
    
@section('content')
    <table border="2">
        <tr>
            <th>nama kategori</th>
            <th colspan="2">aksi</th>
        </tr>
        @foreach ($kategori as $kategoridata)
        <tr>
            <td>{{ $kategoridata->namakategori }}</td>
            <td><button><a href="{{ route('kategori.editkategori',['kategori'=>$kategoridata]) }}">edit</a></button></td>
            <td>
                <form action="{{ route('kategori.deletekategori', ['kategori'=>$kategoridata]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection