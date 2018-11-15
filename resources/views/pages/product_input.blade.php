@extends('layouts.main')

@section('title', 'Products Input Form')

@section('panel-title', 'Product Input Form')

@section('content')
  <div class="col-lg-6">
    @include('pages.partials.form-product')
  </div>
@endsection
