<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\Datatables;

class EmployeeController extends Controller
{
    public function index() {
        return view('employee.index');
    }
    public function list(Request $request) {
    {
        if ($request->ajax()) {
            // $employee = User::query();
            return Datatables::of(User::query())->make(true);
        }
    }
    }
}
