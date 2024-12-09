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
            document.getElementById('totaldisplay').value = totalHarga;
            document.getElementById('pesanan').value = JSON.stringify(selectedItems);
        }
    </script>

    <form action="{{ route('storepesanan') }}" method="post">
        @csrf
        @method('post')
        
        <div class="inline-flex">
            <div class="bg-white p-4 mt-4 rounded-lg shadow-lg w-[670px]">
                <p class=" font-semibold text-xl pb-5">Pilih Menu</p>
                <div class="h-[650px] overflow-y-scroll">
                    @foreach ($menu as $menudata)
                        <div class="inline-flex p-4 bg-white shadow-xl rounded-lg mr-2 mt-3">
                            <div>
                                <img class="w-40 h-36 rounded-lg object-cover" src="{{ $menudata->foto }}" alt="">
                                <div class="mt-2">
                                    <p class="font-semibold">{{ $menudata->nama }}</p>
                                    <p>Rp{{ number_format($menudata->harga, 0, ',', '.') }}</p>
                                    <a>Jumlah Pesanan</a>
                                    <input class="bg-gray-200 rounded-md px-1 w-8" type="number" id="kuantitas_{{ $menudata->nama }}" min="1" value="1"><br>
                                    <button class="bg-red-600 p-2 text-white rounded-lg mt-4 hover:bg-red-700 hover:transition hover:ease-in-out hover:delay-150" type="button" onclick="addText('{{ $menudata->nama }}', {{ $menudata->harga }})">Tambah ke Pesanan</button>    
                                </div>
                            </div>
                        </div>
                    @endforeach     
                </div>
                
            </div>    
        </div>
        <div class="inline-flex">
            <div class=" bg-white rounded-lg shadow-lg ml-2 w-96 py-4 px-3 ml-4">
                <p class=" font-semibold text-xl">Buat Pesanan</p>
                <div class="mt-10">
                    <p>Nama Pelanggan</p>
                    <input class="border-gray-200 border-2 mt-1 h-7 w-[100%] rounded-md px-2" type="text" name="nama_pemesan" id="namapemesan">
                    <p class="mt-4">Daftar Pesanan</p>
                    <textarea class="border-gray-200 border-2 mt-1 w-[100%] rounded-md resize-none px-2" id="txtarea" rows="10" cols="30" readonly name="pesanan"></textarea>
                    <p>Total Harga:</p>
                    <a class="font-semibold">Rp. </a>
                    <input class="bg-white" id="totaldisplay" value="0" disabled>
                    <input id="totalHarga" name="total_harga" value="0" type="hidden">
                    <br>
                    <button class="bg-red-600 text-white py-1 px-5 mt-10 rounded-md hover:bg-red-700 hover:transition hover:ease-in-out hover:delay-150" type="submit">Buat Pesanan</button>        
                </div>
            </div>        
        </div>
    </form>
@endsection
