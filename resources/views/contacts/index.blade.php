<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Management System</title>
    <style>
        body {
            background-color: #111827;
            color: #fff;
        }
        .table thead th {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container p-4 mb-5">
        <h2 class="text-center">Contact Management System</h2>
    </div>
    <div class="wrapper mb-5 bg-secondary p-4" style="width: 80%; margin: 0 auto;">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('contacts.create') }}" class="btn btn-success">Add New Contact</a>
            <form action="{{ route('contacts.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" placeholder="Search by name or email" value="{{ request('search') }}" class="form-control me-2" style="width: 250px">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Contacts Table -->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>
                        <a href="{{ route('contacts.index', ['sort' => 'name']) }}" class="text-white">Name</a>
                    </th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No contacts found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        {{ $contacts->links() }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
