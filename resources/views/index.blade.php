<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Kosan</title>
</head>
<body>
<H1>INFO KOSAN</H1>

<table>
    <thead>
        <tr>Nama Kosan</tr>
        <tr>Kamar Tersedia</tr>
        <tr>Jenis Kos</tr>
        <tr>Tenggat Pembayaran</tr>
        <tr>Tersedia</tr>
        <tr>Aksi</tr>
    </thead>
    <tbody>
        @foreach ($data as $dt)
        <tr>
            <td>{{$dt->namakosan}}</td>
            <td>{{$dt->kamar_tersedia}}</td>
            <td>{{$dt->jeniskos}}</td>
            <td>{{$dt->tenggat_pembayaran}}</td>
            <td>{{$dt->tersedia}}</td>
            <td>
                <a href="{{ route('edit', $dt->id) }}">edit</a>
                <form action="{{ route('destroy', $dt->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-primary mr-2" style="float: right; margin-top: 10px"
href="{{ route('create') }}">
Tambah
</a>
</body>
</html>