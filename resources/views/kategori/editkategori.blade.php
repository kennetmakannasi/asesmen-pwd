<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="{{ route('kategori.updatekategori',['kategori'=> $kategori]) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="namakategori" id="namakategori" placeholder="nama kategori" value="{{ $kategori->namakategori }}">
        <button type="submit">kirim</button>
    </form>
</body>
</html>