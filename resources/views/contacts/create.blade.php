<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Create Contact</title>

</head>
<body>
    <div class="container">
        <h1>Create Contact</h1>

        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf <!-- CSRF protection token -->

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address">

            <button type="submit">Create</button>
            <a href="{{ route('contacts.index') }}" class="action-button">Back</a>
        </form>
    </div>
</body>
</html>
