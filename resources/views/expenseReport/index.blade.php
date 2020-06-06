@extends('layouts.base')

@section('content')
  <div class="row">
    <div class="col">
      <h1>Reports</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/expense_reports/create">Crear un nuevo reporte</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        @foreach ($expenseReports as $expenseReport)
        <tr>
          <td>{{ $expenseReport->title}}</td>
          <td><a href="/expense_reports/{{ $expenseReport->id }}">Detalle</a></td>
          <td><a href="/expense_reports/{{ $expenseReport->id }}/edit">Editar</a></td>
          <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete">Borrar</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
