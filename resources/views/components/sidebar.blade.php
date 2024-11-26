<div class="bg-red-700 w-60 p-2 h-screen fixed">
    <div class="mb-5 mt-14">
        <button class="inline-flex p-2 {{ (Route::is('home'))?'bg-red-900 rounded-lg w-56' : 'bg-none' }} hover:bg-red-900 hover:rounded-lg hover:w-56 hover:transition hover:ease-in-out hover:delay-150">
            <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 12 12"><path fill="white" d="M5.37 1.222a1 1 0 0 1 1.26 0l3.814 3.09A1.5 1.5 0 0 1 11 5.476V10a1 1 0 0 1-1 1H8.5a1 1 0 0 1-1-1V7.5A.5.5 0 0 0 7 7H5a.5.5 0 0 0-.5.5V10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V5.477a1.5 1.5 0 0 1 .556-1.166z"/></svg>
            <a class="text-white" href="{{ route('home') }}">Home</a> 
        </button>
    </div>
    <div class="mb-5">
        <button class="inline-flex p-2 {{ (Route::is('addpesanan'))?'bg-red-900 rounded-lg w-56' : 'bg-none' }} hover:bg-red-900 hover:rounded-lg hover:w-56 hover:transition hover:ease-in-out hover:delay-150">
            <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="white" d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075zM6 9h12V7H6zm12 14q-2.075 0-3.537-1.463T13 18t1.463-3.537T18 13t3.538 1.463T23 18t-1.463 3.538T18 23M3 22V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v6.675q-.7-.35-1.463-.513T18 11H6v2h7.1q-.425.425-.787.925T11.675 15H6v2h5.075q-.05.25-.062.488T11 18q0 1.05.288 2.013t.862 1.837L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5z"/></svg>
            <a class="text-white" href="{{ route('addpesanan') }}">Tambah Pesanan</a>
        </button>    
    </div>
    @if (Auth::user()->role === 'admin')
    <div class="mb-5">
        <button class="inline-flex p-2 {{ (Route::is('menu.datamenu'))?'bg-red-900 rounded-lg w-56' : 'bg-none' }} hover:bg-red-900 hover:rounded-lg hover:w-56 hover:transition hover:ease-in-out hover:delay-150">
            <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="white" d="M14 9.9V8.2q.825-.35 1.688-.525T17.5 7.5q.65 0 1.275.1T20 7.85v1.6q-.6-.225-1.213-.337T17.5 9q-.95 0-1.825.238T14 9.9m0 5.5v-1.7q.825-.35 1.688-.525T17.5 13q.65 0 1.275.1t1.225.25v1.6q-.6-.225-1.213-.338T17.5 14.5q-.95 0-1.825.225T14 15.4m0-2.75v-1.7q.825-.35 1.688-.525t1.812-.175q.65 0 1.275.1T20 10.6v1.6q-.6-.225-1.213-.338T17.5 11.75q-.95 0-1.825.238T14 12.65m-1 4.4q1.1-.525 2.213-.788T17.5 16q.9 0 1.763.15T21 16.6V6.7q-.825-.35-1.713-.525T17.5 6q-1.175 0-2.325.3T13 7.2zM12 20q-1.2-.95-2.6-1.475T6.5 18q-1.05 0-2.062.275T2.5 19.05q-.525.275-1.012-.025T1 18.15V6.1q0-.275.138-.525T1.55 5.2q1.175-.575 2.413-.888T6.5 4q1.45 0 2.838.375T12 5.5q1.275-.75 2.663-1.125T17.5 4q1.3 0 2.538.313t2.412.887q.275.125.413.375T23 6.1v12.05q0 .575-.487.875t-1.013.025q-.925-.5-1.937-.775T17.5 18q-1.5 0-2.9.525T12 20"/></svg>
            <a class="text-white" href="{{ route('menu.datamenu') }}">Menu</a>
        </button>
    </div>
    <div class="mb-5">
        <button class="inline-flex p-2 {{ (Route::is('kategori.datakategori'))?'bg-red-900 rounded-lg w-56' : 'bg-none' }} hover:bg-red-900 hover:rounded-lg hover:w-56 hover:transition hover:ease-in-out hover:delay-150">
            <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="white" d="M2 2h9v9H2zm15.5 0C20 2 22 4 22 6.5S20 11 17.5 11S13 9 13 6.5S15 2 17.5 2m-11 12l4.5 8H2zM19 17h3v2h-3v3h-2v-3h-3v-2h3v-3h2z"/></svg>
            <a class="text-white" href="{{ route('kategori.datakategori') }}">Kategori</a>
        </button>
    </div>
@endif
<form class="mt-96" method="POST" action="{{ route('logout') }}" id="logout">
    @csrf
    <button class="inline-flex p-2 hover:bg-red-900 hover:rounded-lg hover:w-56 hover:transition hover:ease-in-out hover:delay-150" type="submit" id="logoutbutton">
        <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="white" fill-rule="evenodd" d="M16.125 12a.75.75 0 0 0-.75-.75H4.402l1.961-1.68a.75.75 0 1 0-.976-1.14l-3.5 3a.75.75 0 0 0 0 1.14l3.5 3a.75.75 0 1 0 .976-1.14l-1.96-1.68h10.972a.75.75 0 0 0 .75-.75" clip-rule="evenodd"/><path fill="white" d="M9.375 8c0 .702 0 1.053.169 1.306a1 1 0 0 0 .275.275c.253.169.604.169 1.306.169h4.25a2.25 2.25 0 0 1 0 4.5h-4.25c-.702 0-1.053 0-1.306.168a1 1 0 0 0-.275.276c-.169.253-.169.604-.169 1.306c0 2.828 0 4.243.879 5.121c.878.879 2.292.879 5.12.879h1c2.83 0 4.243 0 5.122-.879c.879-.878.879-2.293.879-5.121V8c0-2.828 0-4.243-.879-5.121S19.203 2 16.375 2h-1c-2.829 0-4.243 0-5.121.879c-.879.878-.879 2.293-.879 5.121"/></svg>
        <p class="text-white">Keluar</p>
    </button>
</form>
</div>