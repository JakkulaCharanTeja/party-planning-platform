<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Guest</title>
</head>
<body>
    <h1>Add New Guest</h1>

    <form action="{{ route('guests.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Phone:</label>
        <input type="text" name="phone" required><br><br>

        <button type="submit">Add Guest</button>
    </form>
</body>
</html>
