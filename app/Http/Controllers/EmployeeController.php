<?php

namespace App\Http\Controllers;

use App\Http\Requests\employeeStoreRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\Datatables;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::select("employee_id", "name", "email", "phone", "department_id", "status")->get();
        return view('employee.index', compact('employees'));
    }
    public function create()
    {
        return view('employee.create');
    }
    public function store(employeeStoreRequest $request)
    {

        // Check if the email already exists in the database
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // Handle the duplicate email situation, e.g., show an error message
            return redirect()->route('employeeIndex')->with('error', 'Email address already exists!');
        }

        // If the email doesn't exist, proceed with creating the new user
        $employeeObj = new User();
        $employeeObj->fill($request->only([
            'name', 'email', 'phone', 'address', 'employee_id',
            'nrc', 'status', 'dob', 'register_date', 'department_id', 'gender'
        ]));
        $employeeObj->password = bcrypt($request->password);
        $employeeObj->created_at = now();
        $employeeObj->updated_at = now();
        $employeeObj->save();

        return redirect()->route('employeeIndex')->with('success', 'Employee has been successfully registered!');
    }


}
