
<!DOCTYPE html>
<html>
<head>
    <title>Timeline</title>
</head>
<body>
    <h1>Timeline Events</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('timelines.create') }}">Add New Timeline Event</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($timelines as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ route('timelines.edit', $item->id) }}">Edit</a> |
                        <form action="{{ route('timelines.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Delete this event?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
