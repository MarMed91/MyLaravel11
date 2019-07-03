@extends('layout.home-layout')

@section('content')
      <canvas id="myChart" width="300" height="300"></canvas>

  <ul>
  @foreach ($pagamenti as $pagamento)

      <li>{{ $pagamento -> id }} - {{ $pagamento -> status }} - {{ $pagamento -> price }}</li>
  @endforeach
  </ul>
@stop
