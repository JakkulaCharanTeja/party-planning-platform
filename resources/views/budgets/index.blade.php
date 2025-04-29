<!DOCTYPE html>
<html>
<head>
    <title>Guest List</title>
</head>
<body>
    <h1>Guest List</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('guests.create') }}">Add New Guest</a>
    <br><br>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Attending</th>
            <th>Actions</th>
        </tr>
        @foreach ($budgets as $budget)
    <tr>
        <td>{{ $budget->category }}</td>
        <td>{{ $budget->amount }}</td>
        <td>
            <a href="{{ route('budgets.edit', $budget->id) }}">Edit</a> |
            <form action="{{ route('budgets.destroy', $budget->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

    </table>
</body>
</html>
