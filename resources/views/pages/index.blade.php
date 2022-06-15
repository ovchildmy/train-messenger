
@extends('layouts.main')

@section('title')
  Главная
@endsection

@section('content')
  @if(Auth::check())
    logged
  @else
    not logged
  @endif
@endsection