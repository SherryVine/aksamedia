<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
          <th>No.</th>
          <th>Name</th>
          <th>Category</th>
          <th>Description</th>
          <th>Price</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($product as $data)
        <tr>
          <td>{{ ++$no }}.</td>
          <td>{{ $data->product_name }}</td>
          <td>{{ $data->name }}</td>
          <td>{{ $data->product_description }}</td>
          <td>{{ $data->price }}</td>
        </tr>
      @endforeach
    </tbody>
</table>
<!-- /.table-responsive -->
