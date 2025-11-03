<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Customer List</h1>

    {{-- Success Message --}}
    @if (session('success'))
        <div style="color:green; font-weight:bold;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form to Add Customer --}}
    <form action="{{ route('saveCustomer') }}" method="POST" style="margin-bottom:20px;">
        @csrf
        <label for="cust_name">Customer Name:</label>
        <input type="text" id="cust_name" name="cust_name" value="{{ old('cust_name') }}">

        <label for="cust_address">Customer Address:</label>
        <input type="text" id="cust_address" name="cust_address" value="{{ old('cust_address') }}">

        <button type="submit">Add Customer</button>
    </form>