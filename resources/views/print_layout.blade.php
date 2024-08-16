@extends('adminlte::page')
  @yield('content')

@section('css')
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
<style>
    @page {
    size: letter landscape;
    margin: 2.5cm 2.5cm 2.5cm 2.5cm;
    }
    body {
    font-family: Arial, sans-serif;
    }
    table {
    width: 100%;
    border-collapse: collapse;
    }
    th, td {
    border: 1px solid #000;
    padding: 5px;
    }
</style>
@endsection
@section('js')
  <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
@endsection
