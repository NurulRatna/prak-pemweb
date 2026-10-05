<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - {{ $book->title }}</title>
</head>
<body>

    <h1>Detail Buku</h1>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Judul Buku</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>ISBN</th>
            <td>{{ $book->isbn }}</td>
        </tr>
        <tr>
            <th>Penulis</th>
            <td>{{ $book->author }}</td>
        </tr>
        <tr>
            <th>Penerbit</th>
            <td>{{ $book->publisher }}</td>
        </tr>
        <tr>
            <th>Tahun Terbit</th>
            <td>{{ $book->published_year }}</td>
        </tr>
        <tr>
            <th>Harga</th>
            <td>Rp {{ number_format($book->price, 0, ',', '.') }}</td>
        </tr>
        <tr>
            <th>Stok</th>
            <td>{{ $book->stock }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $book->description ?? '-' }}</td>
        </tr>
    </table>

    <br>
    <a href="{{ route('books.index') }}">Kembali ke Daftar Buku</a> | 
    <a href="{{ route('books.edit', $book) }}">Edit Buku</a>

</body>
</html>