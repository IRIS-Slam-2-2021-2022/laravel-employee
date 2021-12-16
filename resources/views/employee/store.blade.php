<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employee</title>
</head>
<body>
<h1>Ajouter un employee</h1>

<form method="POST">
    @csrf
    <label for="last_name">Nom employee</label>
    <input type="text" id="last_name" />
    <button type="submit">Sauvegarder</button>
</form>

</body>
</html>
