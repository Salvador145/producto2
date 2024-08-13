@extends('main')
@section('head')
<link rel="stylesheet" href="{{asset('css/style2.css')}}">
@endsection
@section('content')
<div class="titlet">
    <h2>Catalogo de productos</h2>
</div>
<div class="catalogo">
    @foreach ($producto as $item)
    <div class="productos">
      <div class="producto">
        <img src="https://static9.depositphotos.com/1378583/1150/v/450/depositphotos_11501921-stock-illustration-power-tool-logo.jpg" alt="Clavones de fierro">
        <h3>{{$item->producto}}</h3>
        <div class="producto-info">
          <span>1 pieza</span>
          <span class="precio">${{$item->precio}}</span>
        </div>
      </div>
  </div>
  @endforeach
@stop