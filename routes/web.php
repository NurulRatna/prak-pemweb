<?php

// use App\Http\Controllers\BookController;
// use Illuminate\Support\Facades\Route;

// Route::view('/', 'home')->name('home');
// Route::resource('books', BookController::class);

// use App\Http\Controllers\BookController;

// // Route untuk menampilkan daftar buku
// Route::get('/books', [BookController::class, 'index'])->name('books.index');

// // Route GET untuk menampilkan halaman form tambah buku
// Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// // Route POST untuk memproses penyimpanan data dari form
// Route::post('/books', [BookController::class, 'store'])->name('books.store');


// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return redirect('/books');
// });

// // Route utama untuk melihat daftar buku
// Route::resource('books', BookController::class);

// // Route khusus untuk mengisi data buku secara otomatis
// Route::get('/seed-buku', function () {
//     \App\Models\Book::create([
//         'title' => 'Laravel Dasar',
//         'isbn' => '9780000000001',
//         'author' => 'Dosen Pengampu',
//         'publisher' => 'Penerbit Kampus',
//         'published_year' => 2026,
//         'price' => 125000,
//         'stock' => 10,
//     ]);

//     return redirect('/books');
// });



use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);