<!DOCTYPE html>
<html>
<head>
    <title>Contact Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>All Contacts</h1>

    <div class="search-container">
        <form action="{{ route('contacts.index') }}" method="GET">
            <input type="text" name="search" placeholder="Search by name or email" style="padding: 8px;">
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="sort-links">
        <a href="{{ route('contacts.index', ['sort' => 'name', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
            Sort by Name
        </a>
        |
        <a href="{{ route('contacts.index', ['sort' => 'created_at', 'direction' => request('direction') == 'asc' ? 'desc' : 'asc']) }}">
            Sort by Date
        </a>
    </div>

    <a href="{{ route('contacts.create') }}" style="padding: 8px; background-color: #4CAF50; color: white; border: none; margin-bottom: 10px; display: inline-block;">Create New Contact</a>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('contacts.show', $contact->id) }}" class="action-button">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="action-button">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-button delete-button">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
