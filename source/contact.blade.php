@extends('_layouts.master')

@section('header')
  @include('_partials.contact.header')
@endsection

@section('body')
  @include('_partials.contact.form')
  @include('_partials.contact.map')
@endsection
