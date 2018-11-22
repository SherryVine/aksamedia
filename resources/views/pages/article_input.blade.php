@extends('layouts.main')

@section('title', 'Article Input Form')

@section('panel-title', 'Article Input Form')

@section('content')
  <div class="col-lg-6">
    @include('pages.partials.form-article')
  </div>
@endsection

@section('js')
  @include('pages.partials.article-js')
@endsection
