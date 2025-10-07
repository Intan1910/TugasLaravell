<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
<!DOCTYPE html>

<html>
<head>
    <title>Data Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f6f1e7, #f9f8f4);
            text-align: center;
            color: #3a3a3a;
            margin: 0;
            padding: 0;
        }

```
    h1 {
        margin-top: 40px;
        color: #6b5b3e;
    }

    table {
        margin: 30px auto;
        border-collapse: collapse;
        width: 70%;
        background: #fffaf3;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 12px;
        border: 1px solid #e9dccb;
    }

    th {
        background-color: #d8c3a5;
        color: #fff;
        letter-spacing: 0.05em;
    }

    tr:nth-child(even) {
        background-color: #f5efe6;
    }

    tr:hover {
        background-color: #efe5d8;
        transition: 0.3s;
    }
</style>
```

</head>
<body>
    <h1>📚 Daftar Buku</h1>

```
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buku as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data['judul'] }}</td>
                <td>{{ $data['penulis'] }}</td>
                <td>{{ $data['tahun'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
```
</body>
</html>
