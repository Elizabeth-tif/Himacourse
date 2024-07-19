<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Dosen</title>
</head>

<body>
    <h1>Edit Dosen</h1>
    <form action="/update_dosen/{{ $dosen->id }}" method="post">
        {{ csrf_field() }}
        @method('PUT')
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $dosen->nama }}" required><br>
        <label for="nip">NIP:</label><br>
        <input type="text" id="nip" name="nip" value="{{ $dosen->nip }}" required><br>
        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" value="{{ $dosen->alamat }}" required><br>
        <label for="mata_kuliah">Mata Kuliah:</label><br>
        <input type="text" id="mata_kuliah" name="mata_kuliah" value="{{ $dosen->mata_kuliah }}" required><br>

    <br>
    <table style="width:25; border:none;">
        <tr>
            <th><a href="/home"><button type="button">Kembali</button></a></th>
            <th><input type="submit" value="Submit"></th>
        </tr>
    </table>
    </form>
</body>

</html>
