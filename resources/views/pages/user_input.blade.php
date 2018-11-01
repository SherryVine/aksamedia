@extends('layouts.main')

@section('title', 'User Input 1')

@section('panel-title', 'Form with Post Method')

@section('content')
  <div class="col-lg-6">
    @include('pages.partials.form-post')
  </div>
@endsection
