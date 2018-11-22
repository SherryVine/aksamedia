@extends('layouts.main')

@section('title', 'Articles List')

@section('unique-css')
  @include('pages.partials.table-css')
@endsection

@section('panel-title', 'Articles List')

@section('content')
  @include('pages.partials.table_articles')
@endsection

@section('unique-js')
  @include('pages.partials.table-js')
@endsection
