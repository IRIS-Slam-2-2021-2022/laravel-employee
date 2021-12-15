<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // TODO - Récupérer l'employee 101 depuis la bdd
        $employee = null;

        return view('employee.index', ['employee' => $employee]);
    }
}
