<!DOCTYPE html>

<html>
<h1>Customer Details</h1>

<ul>
<li>Name: {{ $customer->name }}</li>
<li>Email: {{ $customer->email }}</li>
<li>Phone: {{ $customer->phone }}</li>
</ul>

<h2>Addresses</h2>

@if ($addresses->count() > 0)
    <ul>
        @foreach ($addresses as $address)
            <li>{{ $address->address }}</li>
        @endforeach
    </ul>
@else
    <p>No addresses found.</p>
@endif
</html>
