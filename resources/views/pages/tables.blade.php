@extends('layouts.main')

@section('title', 'Tables')

@section('unique-css')
  @include('pages.partials.table-css')
@endsection

@section('panel-title', 'Data Result')

@section('content')
  @include('pages.partials.tables')
@endsection

@section('unique-js')
  @include('pages.partials.table-js')
@endsection
