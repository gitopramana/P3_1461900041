<!DOCTYPE html>
<html>
<head>
    <title>1461900041</title>
</head>
<body>
<h3>Edit Pelanggan</h3>
<a href="/barang"> Kembali</a>
<br/>
<br/>
@foreach($barang as $brg)
<form action="/barang/update" method="post">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $brg->id }}"> <br/>
barang <input type="text" required="required" name="nama" value="{{ $brg->nama }}"> <br/>
harga <textarea required="required" name="harga">{{ $brg->harga }}</textarea> <br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>