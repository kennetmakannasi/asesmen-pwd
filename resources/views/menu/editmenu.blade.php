@extends('components.editform')

@section('link','/menu/datamenu')

@section('content')
<form action="{{ route('menu.updatemenu',['menu'=> $menu]) }}" method="post">
    @csrf
    @method('put')
    <div>
        <p class="block font-medium text-sm mt-5">Nama Menu</p>
        <input class="bg-gray-200 rounded-md shadow-sm h-7 w-full px-3" type="text" name="nama" id="nama" placeholder="nama" value="{{ $menu->nama }}">
    </div>
    <div>
        <p class="block font-medium text-sm mt-5">Harga Menu</p>
        <input class="bg-gray-200 rounded-md shadow-sm h-7 w-full px-3" type="text" name="harga" id="harga" placeholder="harga" value="{{ $menu->harga }}">
    </div>
    <div>
        <p class="block font-medium text-sm mt-5">Kategori Menu</p>
        <select class="bg-gray-200 rounded-md shadow-sm h-7 w-full px-3"  name="kategori" id="kategori">
            @foreach ($kategori as $kategoridata)
                <option value="{{ $kategoridata->namakategori }}">{{ $kategoridata->namakategori }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <p class="block font-medium text-sm mt-5">Deskripsi Menu</p>
        <input class="bg-gray-200 rounded-md shadow-sm h-7 w-full px-3" type="text" name="deskripsi" id="deskripsi" placeholder="deskripsi" value="{{ $menu->deskripsi }}">
    </div>
    <div>
        <p class="block font-medium text-sm mt-5">Link Foto Menu</p>
        <input class="bg-gray-200 rounded-md shadow-sm h-7 w-full px-3" type="text" name="foto" id="foto" placeholder="foto" value="{{ $menu->foto }}">
    </div>
    <button class="items-center px-4 py-2 bg-red-600 border text-white mt-5 ml-80 border-transparent rounded-md font-semibold text-xs hover:bg-red-700 transition ease-in-out duration-150" type="submit">kirim</button>
</form>
@endsection