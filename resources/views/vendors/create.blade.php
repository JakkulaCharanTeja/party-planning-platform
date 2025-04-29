<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Vendor</title>
</head>
<body>
    <h1>Create New Vendor</h1>
    <form action="{{ route('vendors.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="service_type">Service Type:</label>
        <input type="text" name="service_type" required><br>
        <label for="contact_info">Contact Info:</label>
        <input type="text" name="contact_info" required><br>
        <label for="price">Price:</label>
        <input type="text" name="price" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
