<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Category</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($articles as $data)
        <tr>
          <td>{{ ++$no }}.</td>
          <td>{{ $data->title }}</td>
          <td>
          @foreach ($data->category as $iter)
            {{ $iter->name }}
          @endforeach
          </td>
          <td>{{ $data->body }}</td>
          <td><a href="{{ Route('article.update', ['id' => $data->id]) }}">Update</a> <a href="{{ Route('article.delete', ['id' => $data->id]) }}">Delete</a></td>
        </tr>
      @endforeach
    </tbody>
</table>
<!-- /.table-responsive -->
