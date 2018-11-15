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
              <th>Motto</th>
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
              <td>{{ $data->motto }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <!-- /.table-responsive -->
