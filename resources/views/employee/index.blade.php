<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employee</title>
</head>
<body>
<h1>Mon employee</h1>
<ul>
    <li>{{ $employee->first_name }}</li>
    <li>{{ $employee->last_name }}</li>
    <li>{{ $employee->email }}</li>
</ul>
</body>
</html>
