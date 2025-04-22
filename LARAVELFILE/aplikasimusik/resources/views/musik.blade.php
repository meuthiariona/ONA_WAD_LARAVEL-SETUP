<!DOCTYPE html>
<html>
<head>
    <title>Daftar Musik</title>
</head>
<body>
    <h2>Daftar Musik</h2>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <ul>
        @foreach($musiks as $musik)
            <li>{{ $musik->nama_artis }} - {{ $musik->judul_album }}</li>
        @endforeach
    </ul>
</body>
</html>
