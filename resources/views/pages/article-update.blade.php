@extends('layouts.main')

@section('title', 'Article Update Form')

@section('panel-title', 'Article Update Form')

@section('content')
  <div class="col-lg-6">
    @include('pages.partials.form-article-update')
  </div>
@endsection

@section('js')
  @include('pages.partials.article-js')
@endsection
