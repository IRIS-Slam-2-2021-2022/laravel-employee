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
        if ($request->getMethod() === "POST") {
            $employee = new Employee();
            $employee->fill($request->request->all());
            $employee->save();
        }

        $departments = Department::all();

        return view('employee.store', ['departments' => $departments]);
    }
}
