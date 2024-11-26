@extends('layouts.page')

@section('title','addpesanan')

@section('content')
    <script>
        var totalHarga = 0; 
        var selectedItems = []; 

        function addText() {
            var dropdown = document.getElementById('textOptions');
            var selectedText = dropdown.value;
            var selectedOption = dropdown.options[dropdown.selectedIndex];
            var harga = parseInt(selectedOption.getAttribute('data-harga'));  
            
            var txtarea = document.getElementById('txtarea');
            txtarea.value += selectedText + "\n";

            totalHarga += harga;

            selectedItems.push({
                nama: selectedText,
                harga: harga
            });
            document.getElementById('totalHarga').value = totalHarga;
            document.getElementById('pesanan').value = JSON.stringify(selectedItems);
        }
    </script>

    <form action="{{ route('storepesanan') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="nama_pemesan" id="namapemesan">
        <label for="textOptions">Tambah Pesanan:</label>
        <select id="textOptions">
            @foreach ($menu as $menudata)
                <option value="{{ $menudata->nama }}" data-harga="{{ $menudata->harga }}">{{ $menudata->nama }}</option>    
            @endforeach
        </select>
        <button type="button" onclick="addText()">Tambah Pesanan</button>

        <textarea id="txtarea" rows="10" cols="30" readonly name="pesanan"></textarea>

        <input id="totalHarga" name="total_harga" value="0">

        <button type="submit">Simpan Pesanan</button> 
    </form>
@endsection