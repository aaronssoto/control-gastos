@extends('layouts.base')

@section('content')
  <div class="row">
    <div class="col">
      <h1>Enviar el reporte al Email</h1>
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
      <form action="/expense_reports/{{ $report->id }}/sendMail" method="post">
        @csrf
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" class="form-control" id="email" name="email" placeholder="example@mail.com" value="{{ old('email') }}">
        </div>
        <button class="btn btn-primary" type="submit">Send Mail</button>
      </form>
    </div>
  </div>
@endsection
