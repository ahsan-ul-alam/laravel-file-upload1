<!-- resources/views/contacts/show.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Contact Details</title>
    <style>
        body {
            background-color: #111827;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container p-4 mb-5">
        <h2 class="text-center">Contact Details</h2>
    </div>
    <div class="wrapper mb-5 bg-secondary p-4" style="width: 50%; margin: 0 auto;">
        <div class="mb-3">
            <strong>Name:</strong> {{ $contact->name }}
        </div>
        <div class="mb-3">
            <strong>Email:</strong> {{ $contact->email }}
        </div>
        <div class="mb-3">
            <strong>Phone:</strong> {{ $contact->phone }}
        </div>
        <div class="mb-3">
            <strong>Address:</strong> {{ $contact->address }}
        </div>
        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
