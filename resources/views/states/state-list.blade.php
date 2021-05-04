@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">State Name</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach($states as $state)
              <tr>
                <td>{{ $state->id }}</td>
                <td>{{ $state->state_name }}</td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </section>
</div>
<script>  
$(document).ready( function () {
var t = $('#myTable').DataTable({
  "stateSave": true,
  //"scrollX": true,
  "order": [[ 0, 'asc' ]],
  "columnDefs": [
    {
      "searchable": true,
      "orderable": true,
      "targets": 0
    },
    { "targets": [3], "searchable": false, "orderable": false, "visible": true }
  ]
});

t.on( 'order.dt search.dt'/*, function () {
  t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
  } );
} */).draw();

 } );
</script>
@endsection