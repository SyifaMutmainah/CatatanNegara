<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Yakin ingin menghapus data ini?</h1>
    <p><?= 'Nama :' . $datas->nama ?></p>
    <p><?= 'Tanggal_Lahir :' . $datas->tanggal_lahir ?></p>
    <p><?= 'Alamat :' . $datas->alamat ?></p>
    <p><?= 'Agama :' . $datas->agama ?></p>
    <p><?= 'Jenis_Kelamin :' . $datas->jenis_kelamin ?></p>
    <form action="/delete/{{ $datas->id }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
    <a href="/home">Cancel</a>
    <br><br>
</body>
</html>