<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Menentukan nama tabel di database (opsional, bawaan Laravel: books)
    protected $table = 'books';

    // Mendaftarkan kolom yang diizinkan untuk diisi secara massal (Mass Assignment)
    protected $fillable = [
        'title',
        'isbn',
        'author',
        'publisher',
        'published_year',
        'price',
        'stock',
        'description',
    ];
}