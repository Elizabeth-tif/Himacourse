<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
</head>

<body>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <h1>Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
        </tr>
        @foreach ($data as $data)
            <tr>
                <td>{{ $data->Nama }}</td>
                <td>{{ $data->NIM }}</td>
                <td>{{ $data->Kelas }}</td>
            </tr>
        @endforeach
    </table>


    <h1>Dosen</h1>
    <a href="/add_dosen"><button type="button">Tambah Dosen</button></a> <br><br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Alamat</th>
            <th>Mata Kuliah</th>
        </tr>
        @foreach ($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->nip }}</td>
                <td>{{ $dosen->alamat }}</td>
                <td>{{ $dosen->mata_kuliah }}</td>
                <td><a href="/edit_dosen/{{ $dosen->id }}"><button type="button">Edit</button></a>
                <td>
                    <form action="/delete_dosen/{{ $dosen->id }}" method="post">

                        @csrf
                        @method('delete')
                        <button type="submit">Hapus</button>
                </td>
            </tr>
        @endforeach
    </table>

</body>

</html>
