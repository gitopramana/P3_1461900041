<!DOCTYPE html>
<html>
<head>
    <title>CURD</title>
    </head>
        <body>
            <h3>Membuat Fungsi CURD</h3>
            <p>Kolom Pencarian</p>
            <form action="/barang/cari" method="GET">
                <p> Cari Pelanggan  <input type="text" name="lihat" placeholder="isikan disini" value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>

             <a href="/barang/tambah"> Tambahkan Barang </a>
             <table border="1">
        <tr>
        <th>Id</th>
        <th>Nama</th>
         <th>Harga</th>
            </tr>
                @foreach($barang as $brg)
                 <tr>
                 <td>{{ $brg->id }}</td>
                 <td>{{ $brg->nama }}</td>
                 <td>{{ $brg->harga }}</td>
                <td>
                     <a href="/barang/edit/{{ $brg->id }}">Edit</a>
|
                     <a href="/barang/hapus/{{ $brg->id }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    </body>
</html>
