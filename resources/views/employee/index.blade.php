@extends('layouts.app')
@section('title','Employee')
@section('content')
   
   <div class="card">
        <div class="card-body">
        <div class="col-sm-12 mt-3 mb-2 pt-4 px-4">
            <div class="mb-2">
                <a href="{{route('employee.create')}}" class="btn btn-primary">Create</a>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   </div>
    <!-- <table id="datatable" class="display yajra-datatable" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Email</th>
            </tr>
        </thead>
    </table> -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#datatable').DataTable({
            ajax: 'employee/datatable/list',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data:'phone', name:'phone'},
                {data:'department_name', name:'department_name'},
                {data:'status', name:'status'},
          ],
          responsive: true
        })
        
    });
</script>
@endsection