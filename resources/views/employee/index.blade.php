@extends('layouts.app')
@section('title','Employee')
@section('content')
   
   <div class="card">
        <div class="card-body">
        <div class="col-sm-12 mt-3 mb-2 pt-4 px-4">
            <div class="mb-2">
                <a href="{{route('employeeCreate')}}" class="btn btn-primary">Create</a>
            </div>
            <div class="bg-light rounded p-4">
                <h6 class="mb-4">Employee Table</h6>
                <div class="table">
                    <table class="table" id="datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email </th>
                                <th scope="col">Phone</th>
                                <th scope="col">Department</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <th>{{ $employee->employee_id }}</th>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->department_id }}</td>
                                <td>{{ $employee->status }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection
