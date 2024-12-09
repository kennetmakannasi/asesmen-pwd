@extends('layouts.page')

@section('title','data menu')

@section('content')
    <button><a href="{{ route('menu.addmenu') }}">Buat Menu</a></button>
    <table class="bg-white rounded-lg overflow-x-scroll mt-4">
        <tr class="border-b-4 border-b-gray-200">
            <th class="p-2">nama</th>
            <th class="p-2">harga</th>
            <th class="p-2">kategori</th>
            <th class="p-2 w-[300px]">Deskripsi</th>
            <th class="p-2 w-96">Foto</th>
            <th class="p-2" colspan="2">aksi</th>
        </tr>
        @foreach ($menu as $menudata)
        <tr class="border-t-4 border-t-gray-200">
            <td class="p-2">{{ $menudata->nama }}</td>
            <td class="p-2">{{ $menudata->harga }}</td>
            <td class="p-2">{{ $menudata->kategori }}</td>
            <td class="p-2">{{ $menudata->deskripsi }}</td>
            <td class="p-2"><img class="rounded-lg m-3 h-40 w-64 object-cover" src="{{ $menudata->foto }}" alt=""></td>
            <td class="p-2"><button><a class="bg-green-500 p-2 rounded-lg px-3 text-white hover:bg-green-600" href="{{ route('menu.editmenu',['menu'=>$menudata]) }}">edit</a></button></td>
            <td class="p-2">
                <form action="{{ route('menu.deletemenu', ['menu'=>$menudata]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="bg-red-500 p-2 rounded-lg text-white hover:bg-red-600" type="submit">hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection