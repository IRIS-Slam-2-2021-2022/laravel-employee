<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tous les employés</title>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>Tous les employés</h1>
<table>
    <thead>
    <tr>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Email</td>
        <td>Departement</td>
    </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->department->department_name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
