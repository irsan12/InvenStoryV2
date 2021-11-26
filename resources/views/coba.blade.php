<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<tr>
    <td>{{ $pengguna->name }}</td>
    <td>{{ $pengguna->transaksi->id }}</td>
    
    @foreach($pengguna->transaksi->barang as $h)
    <td>{{ $h->kodebarang }}</td>
    @endforeach
</tr>

</body>
</html>