<div>
    <label for="title">Judul Buku</label><br>
    <input 
        type="text" 
        id="title" 
        name="title" 
        value="{{ old('title', $book->title ?? '') }}"
    >
    @error('title')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="isbn">ISBN</label><br>
    <input 
        type="text" 
        id="isbn" 
        name="isbn" 
        value="{{ old('isbn', $book->isbn ?? '') }}"
    >
    @error('isbn')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="author">Penulis</label><br>
    <input 
        type="text" 
        id="author" 
        name="author" 
        value="{{ old('author', $book->author ?? '') }}"
    >
    @error('author')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="publisher">Penerbit</label><br>
    <input 
        type="text" 
        id="publisher" 
        name="publisher" 
        value="{{ old('publisher', $book->publisher ?? '') }}"
    >
    @error('publisher')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="published_year">Tahun Terbit</label><br>
    <input 
        type="number" 
        id="published_year" 
        name="published_year" 
        value="{{ old('published_year', $book->published_year ?? '') }}"
    >
    @error('published_year')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="price">Harga</label><br>
    <input 
        type="number" 
        id="price" 
        name="price" 
        value="{{ old('price', $book->price ?? '') }}"
    >
    @error('price')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="stock">Stok</label><br>
    <input 
        type="number" 
        id="stock" 
        name="stock" 
        value="{{ old('stock', $book->stock ?? '') }}"
    >
    @error('stock')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<div>
    <label for="description">Deskripsi</label><br>
    <textarea id="description" name="description">{{ old('description', $book->description ?? '') }}</textarea>
    @error('description')
        <small style="color: red;">{{ $message }}</small>
    @enderror
</div>
<br>

<button type="submit">Simpan Data</button>