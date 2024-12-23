@extends('layouts.page')

@section('title','home')

@section('content')
    <div class="inline-flex mt-4">
        <div class="bg-white shadow-lg w-[430px] rounded-lg inline-flex">
            <h1 class="text-3xl font-semibold p-4">Selamat Datang {{ Auth::user()->name }}</h1>    
        </div>
        <div class="inline-flex bg-white shadow-lg p-3 w-52 rounded-lg relative ml-3">
            <div>
                <p>Jumlah Pesanan:</p>
                <p class="text-3xl font-semibold">{{ $pesanancount }}</p>    
            </div>
            <svg class="absolute right-3" xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24"><path fill="#e2e8f0" d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075zM6 9h12V7H6zm12 14q-2.075 0-3.537-1.463T13 18t1.463-3.537T18 13t3.538 1.463T23 18t-1.463 3.538T18 23M3 22V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v6.675q-.7-.35-1.463-.513T18 11H6v2h7.1q-.425.425-.787.925T11.675 15H6v2h5.075q-.05.25-.062.488T11 18q0 1.05.288 2.013t.862 1.837L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5z"/></svg>
        </div>
        <div class="inline-flex bg-white shadow-lg p-3 w-52 rounded-lg relative ml-3">
            <div>
                <p>Jumlah Menu:</p>
                <p class="text-3xl font-semibold">{{ $menucount }}</p>    
            </div>
            <svg class="absolute right-3" xmlns="http://www.w3.org/2000/svg" width="3.5em" height="3.5em" viewBox="0 0 24 24"><path fill="#e2e8f0" d="M14 9.9V8.2q.825-.35 1.688-.525T17.5 7.5q.65 0 1.275.1T20 7.85v1.6q-.6-.225-1.213-.337T17.5 9q-.95 0-1.825.238T14 9.9m0 5.5v-1.7q.825-.35 1.688-.525T17.5 13q.65 0 1.275.1t1.225.25v1.6q-.6-.225-1.213-.338T17.5 14.5q-.95 0-1.825.225T14 15.4m0-2.75v-1.7q.825-.35 1.688-.525t1.812-.175q.65 0 1.275.1T20 10.6v1.6q-.6-.225-1.213-.338T17.5 11.75q-.95 0-1.825.238T14 12.65m-1 4.4q1.1-.525 2.213-.788T17.5 16q.9 0 1.763.15T21 16.6V6.7q-.825-.35-1.713-.525T17.5 6q-1.175 0-2.325.3T13 7.2zM12 20q-1.2-.95-2.6-1.475T6.5 18q-1.05 0-2.062.275T2.5 19.05q-.525.275-1.012-.025T1 18.15V6.1q0-.275.138-.525T1.55 5.2q1.175-.575 2.413-.888T6.5 4q1.45 0 2.838.375T12 5.5q1.275-.75 2.663-1.125T17.5 4q1.3 0 2.538.313t2.412.887q.275.125.413.375T23 6.1v12.05q0 .575-.487.875t-1.013.025q-.925-.5-1.937-.775T17.5 18q-1.5 0-2.9.525T12 20"/></svg>
        </div>
    </div>

    <div class="inline-flex mt-4">
        <div>
        <table class="overflow-x-scroll rounded-lg bg-white shadow-lg text-left">
            <tr class="border-b-4 border-b-gray-100 h-10">
                <th class="p-2 w-40">nama pemesan</th>
                <th class="p-2 w-40">pesanan</th>
                <th class="p-2 w-40">total harga</th>
                <th class="p-2 w-80">tanggal pemesanan</th>
                <th class="p-2 w-20">Aksi</th>
            </tr>
            @foreach ($pesanan as $data)
            <tr class=" border-t-4 border-t-gray-100 h-20">
                <td class="p-2">{{ $data->nama_pemesan }}</td>
                <td class="p-2">{!! nl2br(e($data->pesanan)) !!}</td>
                <td class="p-2">Rp. {{ $data->total_harga }}</td>
                <td class="p-2">{{ $data->created_at }}</td>    
                <td class="p-2">
                    <form action="{{ route('deletepesanan',['pesanan'=>$data]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bg-red-500 p-2 rounded-lg text-white hover:bg-red-600">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>      
        </div>
        
        <div class="w-52 bg-white shadow-lg ml-4 rounded-lg absolute top-4 right-32">
            <h1 class="font-bold p-3">Menu Terbaru</h1>
            @foreach ($menu->slice(0,3) as $menudata)
                <div class="bg-white m-3 rounded-lg p-3 shadow-lg">
                    <img class="h-32 w-full object-cover rounded-lg" src="{{ $menudata->foto }}" alt="menu">
                    <p class="mt-2">{{ $menudata->nama }}</p>
                </div>    
            @endforeach
        </div>     
    </div>
@endsection