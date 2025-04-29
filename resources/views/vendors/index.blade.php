<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendors List</title>
</head>
<body>
    <h1>Vendors List</h1>
    
    <a href="{{ route('vendors.create') }}">Add New Vendor</a>
    <ul>
        @foreach ($vendors as $vendor)
            <li>{{ $vendor->name }} - {{ $vendor->service_type }}</li>
        @endforeach
    </ul>
</body>
</html>
