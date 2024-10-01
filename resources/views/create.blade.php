<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <input type="text" name="namakosan" placeholder="masukkan nama kosan">
        <input type="number" name="kamar_tersedia" placeholder="masukkan jumlah kamar">
        <select name="jeniskos">
            <option value="Putra">Putra</option>
            <option value="Putri">Putri</option>
            <option value="Campuran">Campur</option>
        </select>
        <input type="date" name="tenggat_pembayaran" placeholder="masukkan tenggat">
        <input type="submit" value="simpan">
    </form>
</body>
</html>