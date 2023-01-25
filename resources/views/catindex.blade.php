<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Negara</title>
</head>
<body>
    <p> Catatan Negara </p>
    <a href = "/input">Input Data</a>
    @foreach($datas as $datdir)
    <p>{{ $loop->iteration }} . Nama : <?= $datdir->nama ?></p>
    <p> Tanggal Lahir : <?=$datdir->tanggal_lahir ?></p>
    <p> Alamat : <?=$datdir->alamat ?></p>
    <p> Agama : <?=$datdir->agama ?></p>
    <p> Jenis Kelamin : <?=$datdir->jenis_kelamin ?></p>
    <a href="/home/{{ $datdir->id }}">Detail</a>
    <a href="/edit/{{ $datdir->id }}">Edit</a>
    <form action="/delete/{{ $datdir->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    <br><br>
    @endforeach
    <br><br>
</body>
</html>