@extends('layouts.main')

@section('title', 'Data Result')

@section('css')
  @parent
  <!-- DataTables CSS -->
  <link href="{{asset('/vendor/datatables-plugins/dataTables.bootstrap.css')}}" rel="stylesheet">
  <!-- DataTables Responsive CSS -->
  <link href="{{asset('/vendor/datatables-responsive/dataTables.responsive.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Tables</h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  Data Result
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Place of Birth</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Adress</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($results as $data)
                          <tr>
                            <td>{{ ++$no }}.</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->placebirth }}</td>
                            <td>{{ $data->datebirth }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->address }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
@endsection

@section('js')
  @parent
  <!-- DataTables JavaScript -->
  <script src="{{asset('/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('/vendor/datatables-responsive/dataTables.responsive.js')}}"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
@endsection
