<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('update', $kosan->id)}}" method="POST"
        class="forms-sample">
        @method('PUT')
        @csrf
        <div class="form-group">
        <label for="namakosan">Nama Kosan</label>
        <input type="text" name="namakosan" class="form-control" id="namakosan"
        placeholder="Nama Kosan" value="{{ $kosan->namakosan}}">
        @error('namakosan')
        {{ $message }}
        @enderror
        </div>
        <div class="form-group">
        <label for="kamar_tersedia">Kamar Tersedia</label>
        <input type="text" name="kamar_tersedia" class="form-control" id="kamar_tersedia"
        placeholder="Kamar Tersedia" value="{{ $kosan->kamar_tersedia }}">
        @error('kamar_tersedia')
        {{ $message }}
        @enderror
        </div>
        <div class="form-group">
        <label for="jeniskos">Jenis Kos</label>
        <select class="form-control" name="jenis_kos" id="jeniskos">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Campur">Campur</option>
        </select>
        </div>
        <div class="form-group">
        <label for="tenggat_pembayaran">Tenggat Pembayaran</label>
        <input type="date" name="tenggat_pembayaran" class="form-control" id="tenggat_pembayaran"
        placeholder="Tenggat Pembayaran" value="{{ $kosan->tenggat_pembayaran }}">
        </div>
        <button type="submit" value="simpan" class="btn btn-primary mr2">Simpan</button>
        </form>
        
</body>
</html>