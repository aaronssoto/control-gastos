@extends('layouts.base')

@section('content')
  <div class="row">
    <div class="col">
      <h1>Editar Reporte: {{ $report->title}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="/expense_reports/{{ $report->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="title">Titulo:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Ingrese el titulo" value="{{ $report->title }}">
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </form>
    </div>
  </div>
@endsection
