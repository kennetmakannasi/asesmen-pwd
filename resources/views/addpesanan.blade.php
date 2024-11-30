@extends('layouts.page')

@section('title', 'addpesanan')

@section('content')
    <script>
        var totalHarga = 0;
        var selectedItems = [];

        function addText(menuName, harga) {
            var kuantitas = document.getElementById('kuantitas_' + menuName).value;
            var itemTotal = harga * kuantitas;

            var txtarea = document.getElementById('txtarea');
            txtarea.value += menuName + " x" + kuantitas + "\n";

            totalHarga += itemTotal;

            selectedItems.push({
                nama: menuName,
                harga: harga,
                kuantitas: kuantitas,
                total: itemTotal
            });

            document.getElementById('totalHarga').value = totalHarga;
            document.getElementById('pesanan').value = JSON.stringify(selectedItems);
        }
    </script>

    <form action="{{ route('storepesanan') }}" method="post">
        @csrf
        @method('post')
        
        <input type="text" name="nama_pemesan" id="namapemesan" placeholder="Nama Pemesan">

        <label for="menuOptions">Pilih Pesanan:</label>
        <div id="menuOptions">
            @foreach ($menu as $menudata)
                <div class="menu-item" style="margin-bottom: 10px;">
                    <span>{{ $menudata->nama }} - Rp{{ number_format($menudata->harga, 0, ',', '.') }}</span>
                    <input type="number" id="kuantitas_{{ $menudata->nama }}" min="1" value="1" style="width: 60px; margin-left: 10px;">
                    <button type="button" onclick="addText('{{ $menudata->nama }}', {{ $menudata->harga }})">
                        Tambah Pesanan
                    </button>
                </div>
            @endforeach
        </div>

        <textarea id="txtarea" rows="10" cols="30" readonly name="pesanan"></textarea>

        <input id="totalHarga" name="total_harga" value="0" type="hidden">

        <button type="submit">Simpan Pesanan</button>
    </form>
@endsection
