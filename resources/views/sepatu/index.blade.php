<h1>Data Sepatu</h1>
<a href="{{ url('/create') }}">Tambah</a>

<table border="1">
    <tr>
        <th>Nama</th>
        <th>Merk</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    @foreach($sepatu as $s)
    <tr>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->merk }}</td>
        <td>{{ $s->harga }}</td>
        <td>{{ $s->stok }}</td>
        <td>
            <a href="{{ route('sepatu.edit', $s->id) }}">Edit</a>
            <form action="{{ route('sepatu.destroy', $s->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>