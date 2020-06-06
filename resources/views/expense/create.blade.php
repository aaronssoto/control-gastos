@extends('layouts.base')

@section('content')
  <div class="row">
    <div class="col">
      <h1>Nuevo Gasto</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports/{{ $report->id }}">Regresar</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      @if($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
      @endif
      <form action="/expense_reports/{{ $report->id }}/expenses" method="post">
        @csrf
        <div class="form-group">
          <label for="title">Descripcion: </label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Ingrese la Descripcion" value="{{ old('description') }}">
        </div>
        <div class="form-group">
          <label for="title">Valor: </label>
          <input type="text" class="form-control" id="amount" name="amount" placeholder="Ingrese el valor" value="{{ old('amount') }}">
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </form>
    </div>
  </div>
@endsection
