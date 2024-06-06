<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <h1>Daftar Kategori</h1>
    <a href="{{route('cart.get')}}">cart</a>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Deskripsi</th>
        </tr>

        @foreach ($categories as $category)
            <tr>
                <td><a href="{{ route('category.get', $category->CategoryID) }}">{{ $category->CategoryName }}</a></td>
                <td>{{ $category->Description }}</td>
            </tr>
        @endforeach
</body>

</html>