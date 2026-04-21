<h1>Tambah Sepatu</h1>

<form action="{{ route('sepatu.store') }}" method="POST">
    @csrf
    Nama: <input type="text" name="nama"><br>
    Merk: <input type="text" name="merk"><br>
    Harga: <input type="number" name="harga"><br>
    Stok: <input type="number" name="stok"><br>
    <button type="submit">Simpan</button>
</form>