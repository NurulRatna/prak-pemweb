<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    <a href="{{ route('books.create') }}">Tambah Buku Baru</a>
    <br><br>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($books as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->stock }}</td>
                    <td>
                        {{-- Tombol Detail --}}
                        <a href="{{ route('books.show', $book) }}">Detail</a> | 

                        {{-- Tombol Edit (Sesuai Langkah 2 Modul) --}}
                        <a href="{{ route('books.edit', $book) }}">Edit</a> | 

                        {{-- Tombol Hapus (Sesuai Langkah 4 Modul) --}}
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus data buku ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:none; border:none; color:red; cursor:pointer; text-decoration:underline; padding:0;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">Belum ada data buku.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>