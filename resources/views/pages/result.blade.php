@extends('layouts.main')

@section('title', 'Data Result')

@section('content')
  <div class="card text-center" style="margin-top:100px;">
    <div class="card-title">
      <h3 style="margin-top:20px;">User Profile</h3>
    </div>
    <div class="card-body">
      @if($results->first())
        <table class="table table-striped table-hover">
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
          @php
            $no = 1
          @endphp
          <tbody>
            @foreach ($results as $data)
              <tr>
                <td>{{ $no++ }}.</td>
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
      @else <p>The Table is Empty</p>
      @endif
    </div>
  </div>
@endsection
