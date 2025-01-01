<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Prof</title>
</head>
<body>
    <h1>Create Prof</h1>

    <form action="{{ route('profs.store') }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <button type="submit">Save Prof</button>
    </form>

    <h2>All Profs</h2>
    <ul>
        @foreach ($profs as $prof)
            <li>{{ $prof->email }}
                <a href="{{ route('profs.edit', $prof->id) }}">Edit</a>
                <form action="{{ route('profs.destroy', $prof->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
