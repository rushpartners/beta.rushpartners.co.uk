@extends('_layouts.master')

@section('header')
  @include('_partials.home.header')
@endsection

@section('body')
  @include('_partials.home.brands')
  @include('_partials.home.learn-more')
  @include('_partials.home.passion')
  @include('_partials.home.adapt')
  @include('_partials.home.team')
  @include('_partials.home.jobs')
@endsection
