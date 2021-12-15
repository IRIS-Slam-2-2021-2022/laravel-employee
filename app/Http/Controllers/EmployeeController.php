<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::find(100);

        return view('employee.index', ['employee' => $employee]);
    }

    public function all()
    {
        $employees = null; // TODO - Récupérer tous les employees

        // TODO - Retourner une nouvelle vue avec un tableau des employees
    }
}
