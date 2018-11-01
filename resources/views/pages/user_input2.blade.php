@extends('layouts.main')

@section('title', 'User Input 1')

@section('panel-title', 'Form with Put Method')

@section('content')
  <div class="col-lg-6">
    @include('pages.partials.form-put')
  </div>
@endsection
