@extends('layouts.main')

@section('title', 'Category List')

@section('unique-css')
  @include('pages.partials.table-css')
@endsection

@section('panel-title', 'Category List')

@section('content')
  @include('pages.partials.table_categories')
@endsection

@section('unique-js')
  @include('pages.partials.table-js')
@endsection
