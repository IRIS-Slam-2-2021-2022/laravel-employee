<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::find(100);

        // Identique à
        // $employee = Employee::where('employee_id', 100)->first();

        return view('employee.index', ['employee' => $employee]);
    }

    public function all()
    {
        $employees = Employee::all();

        // TODO - Retourner une nouvelle vue avec un tableau des employees
        return view('employee.all', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->last_name = $request->request->get('last_name');
        $employee->save();

        return view('employee.store');
    }
}
