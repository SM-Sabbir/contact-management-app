<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>View Contact</title>
</head>
<body>
    <div class="container">
        <h1>Contact Details</h1>
        <p><strong>Name:</strong> {{ $contact->name }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Address:</strong> {{ $contact->address }}</p>
        <a href="{{ route('contacts.index') }}" class="action-button">Back to List</a> <!-- Using action-button class -->
    </div>
</body>
</html>
