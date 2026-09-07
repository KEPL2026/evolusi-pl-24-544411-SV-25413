<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas</title>
</head>
<body>
    <h1>Daftar Tugas</h1>

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <input type="text" name="title" placeholder="Tugas baru" required>
        <button type="submit">Tambah</button>
    </form>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</body>
</html>