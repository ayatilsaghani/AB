<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prof</title>
</head>
<body>
    <h1>Edit Prof</h1>

    <form action="{{ route('profs.update', $prof->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $prof->email }}" required><br>

        <label for="password">Password (Leave blank to keep the same):</label>
        <input type="password" name="password" id="password"><br>

        <button type="submit">Update Prof</button>
    </form>

</body>
</html>
