@extends('main')
@section('head')
<link rel="stylesheet" href="{{asset('css/style3.css')}}">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
@endsection
@section('content')
    <div class="catalogo">
        <h2>inventario</h2>
        <table id="inventario">
          <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Existencia</th>
            <th>Precio</th>
            <th>Detalles</th>
          </tr>
          @foreach($inventario as $items)
          <tr>
            <td>{{$items->ID}}</td>
            <td>{{$items->Producto}}</td>
            <td>{{$items->Cantidad}}</td>
            <td>${{$items->Precio}}</td>
            <td><button>Ver detalles</button></td>
          </tr>
          @endforeach
        </table>
        </body>
        </html>
</div>
@stop