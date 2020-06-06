@extends('layouts.base')

@section('content')
  <div class="row">
    <div class="col">
      <h1>Nuevo reporte</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
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
      <form action="/expense_reports" method="post">
        @csrf
        <div class="form-group">
          <label for="title">Titulo: </label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Ingrese el titulo" value="{{ old('title') }}">
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </form>
    </div>
  </div>
@endsection
