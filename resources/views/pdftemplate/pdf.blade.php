<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Kursus</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Kursus</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Jumlah Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kursus as $data)
            <tr>
                <td>{{ $data->nama_kursus }}</td>
                <td>{{ $data->deskripsi }}</td>
                <td>{{ $data->harga }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->jumlah_siswa }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>