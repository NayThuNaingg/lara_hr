@extends('layouts.app')
@section('title','Employee')
@section('content')
<table id="example" class="display yajra-datatable" style="width:100%">
        <thead>
            <tr>
                <th>name</th>
                <th>Email</th>
            </tr>
        </thead>
    </table>
<!-- Include DataTables and its plugins -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

@endsection
@section('script')
<script type="text/javascript">
 
</script>
@endsection