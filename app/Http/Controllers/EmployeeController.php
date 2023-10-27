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
            $employee = User::with('department');
            return Datatables::of($employee)
            ->addColumn('department_name', function($each){
                return $each->department ? $each->department->department : '-';
            })
            ->editColumn('status', function($each) {
                if($each->status == 0 ) {
                    return '<span class="btn btn-danger rounded-pill m-2">Leave</span>';
                } else {
                    return '<span class="btn btn-primary rounded-pill m-2">Present</span>';
                };
            })->rawColumns(['status'])
            ->make(true);
        }
    }
    }
    public function create() {
        return view('employee.create');
    }
}
