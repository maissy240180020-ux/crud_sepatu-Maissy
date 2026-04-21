<h1>Edit Sepatu</h1>

<form action="{{ route('sepatu.update', $sepatu->id) }}" method="POST">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{ $sepatu->nama }}"><br>
    Merk: <input type="text" name="merk" value="{{ $sepatu->merk }}"><br>
    Harga: <input type="number" name="harga" value="{{ $sepatu->harga }}"><br>
    Stok: <input type="number" name="stok" value="{{ $sepatu->stok }}"><br>
    <button type="submit">Update</button>
</form>