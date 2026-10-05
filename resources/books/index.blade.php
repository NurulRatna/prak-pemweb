<!-- @extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<h1>Daftar Buku</h1>

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
        @forelse ($books as $book)
        <tr>
            <td>{{ $books->firstItem() + $loop->index }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->stock }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}">Detail</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">Data belum tersedia</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{-- Tambahkan navigasi pagination sederhana setelah tabel --}}
@if ($books->hasPages())
    <nav style="margin-top: 15px;">
        @if ($books->onFirstPage())
            <span>Sebelumnya</span>
        @else
            <a href="{{ $books->previousPageUrl() }}">Sebelumnya</a>
        @endif

        <span>
            Halaman {{ $books->currentPage() }} dari {{ $books->lastPage() }}
        </span>

        @if ($books->hasMorePages())
            <a href="{{ $books->nextPageUrl() }}">Berikutnya</a>
        @endif
    </nav>
@endif
@endsection -->