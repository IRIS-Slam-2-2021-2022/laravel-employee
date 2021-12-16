<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>User</title>
</head>
<body>
<h1>Ajouter un user</h1>

<form method="POST" action="/user/store">
    @csrf
    <div>
        <label for="name">Nom *</label>
        <input type="text" id="name" name="name" />
    </div>
    <div>
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" />
    </div>
    <div>
        <label for="password">Mot de passe *</label>
        <input type="password" id="password" name="password"  />
    </div>
    <button type="submit">Sauvegarder</button>
</form>

</body>
</html>
