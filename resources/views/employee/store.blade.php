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
    <div>
        <label for="last_name">Nom employee</label>
        <input type="text" id="last_name" name="last_name" />
    </div>
    <div>
        <label for="first_name">Prénom</label>
        <input type="text" id="first_name" name="first_name" />
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" />
    </div>
    <div>
        <label for="hire_date">Date d'embauche</label>
        <input type="date" id="hire_date" name="hire_date" />
    </div>
    <div>
        <label for="job_id">Job</label>
        <input type="number" id="job_id" name="job_id" />
    </div>
    <div>
        <label for="salary">Salary</label>
        <input type="number" id="salary" name="salary" />
    </div>
    <div>
        <label for="department_id">Departement</label>
        <select id="department_id" name="department_id">
            @foreach ($departments as $department)
                <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Sauvegarder</button>
</form>

</body>
</html>
