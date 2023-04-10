<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="container mt-5">
    <div>
        <p>
            Filters
        </p>
        <form action="/customers" method="get">
            <label>Name customers</label>
            <input type="text" name="name" />
            <label>Email</label>
            <input type="text" name="email" />
            <label>Phone</label>
            <input type="text" name="phone" />
            <input type="checkbox", name="blocked" placeholder="Blocked"/>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>
    <table class="table table-bordered mb-4">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->customer_id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->blocked ? 'blocked':'free' }}</td>
                <td>{{ $customer->surname }}</td>
                <td>{{ $customer->phone}}</td>
                <td>{{ $customer->email}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $customers->withQueryString()->links()}}
        <!-- ?? -->
    </div>
</div>
</body>

</html>
