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
    </thead>
    <tbody>
        @foreach ($data as $dt)
        <tr>
            <td>{{$dt->namakosan}}</td>
            <td>{{$dt->kamar_tersedia}}</td>
            <td>{{$dt->jeniskos}}</td>
            <td>{{$dt->tenggat_pembayaran}}</td>
            <td>{{$dt->tersedia}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>