<!DOCTYPE html>
<html>
<head>
    <title>Daftar Musik</title>
</head>
<body>
    <h2>Daftar Musik</h2>
    <ul>
        @foreach($musiks as $m)
            <li>{{ $m->nama_artis }} - {{ $m->judul_album }}</li>
        @endforeach
    </ul>
</body>
</html>
