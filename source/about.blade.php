@extends('_layouts.master')

@section('header')
  @include('_partials.about.header')
@endsection

@section('body')
  @include('_partials.about.summary')
  @include('_partials.about.tiles')
  @include('_partials.about.timeline')
@endsection
