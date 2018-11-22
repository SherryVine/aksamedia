<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Number of Article</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($categories as $data)
        <tr>
          <td>{{ ++$no }}.</td>
          <td>{{ $data->name }}</td>
          <td>{{ count($data->article) }}</td>
        </tr>
      @endforeach
    </tbody>
</table>
<!-- /.table-responsive -->
