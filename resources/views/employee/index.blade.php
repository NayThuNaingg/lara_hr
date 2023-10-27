@extends('layouts.app')
@section('title','Employee')
@section('content')
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Responsive Table</h6>
            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email </th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
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
           
          ]
        })
    //   var table = $('#datatable').DataTable({
    //       processing: true,
    //       serverSide: true,
    //       ajax: "{{ url('employee/datatable/list') }}",
    //       columns: [
    //         //   {data: 'id', name: 'id'},
    //           {data: 'name', name: 'name'},
    //           {data: 'email', name: 'email'},
    //         //   {data: 'action', name: 'action', orderable: false, searchable: false},
    //       ]
    //   });
    //     let table = new DataTable('#datatable', {
    //         // options
    //     });
        
    });
</script>
@endsection