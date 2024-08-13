@props([
    'id_table' => '',
    'data_table' => [],
    'Table_name_columns' => [],
    'url_columns' => '',
    'accion' => false,
    'especific' => 'detalles',
    'function' => '',
])

@php 
    if (!empty($data_table)) {
        $Table_name_columns = array_keys((array) $data_table[0]);
    } else {
        $Table_name_columns = [];
    }
@endphp


<style>
    /* Contenedor de la tabla */
    #{{$id_table}}_wrapper {
    width: 95%;
    padding: 20px;
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
    font-family: 'Helvetica Neue', Arial, sans-serif;
}

/* Campo de búsqueda */
#{{$id_table}}_filter input[type="search"] {
    width: 250px;
    padding: 10px 15px 10px 40px;
    border-radius: 20px;
    border: 1px solid #cccccc;
    background-color: #f9f9f9;
    background-position: 10px center;
    background-size: 18px 18px;
    transition: all 0.3s ease;
}

#{{$id_table}} thead {
    background-color: #f2f2f2; /* Color de fondo para el encabezado */
    border-bottom: 2px solid #007BFF; /* Color del borde inferior del encabezado */
}

#{{$id_table}} thead th {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    padding: 12px;
    text-align: left;
}

/* Filas del cuerpo de la tabla */
#{{$id_table}} tbody tr {
    border-bottom: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

#{{$id_table}} tbody tr:hover {
    background-color: #f9f9f9; /* Color de fondo al pasar el mouse */
}

#{{$id_table}} tbody td {
    font-size: 13px;
    padding: 10px;
    color: #555;
    text-align: left;
}

/* Estilo para enlaces dentro de la tabla */
#{{$id_table}} tbody td a {
    color: #007BFF; /* Color de enlace */
    text-decoration: none; /* Sin subrayado */
}

#{{$id_table}} tbody td a:hover {
    text-decoration: underline; /* Subrayado al pasar el mouse */
}

/* Botón de acción */
.btn {
    background-color: #007BFF; /* Color de fondo del botón */
    color: #ffffff; /* Color del texto del botón */
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3; /* Color de fondo del botón al pasar el mouse */
}
</style>

@if (!empty($data_table))
    <table id="{{$id_table}}" class="table">
        <thead>
            <tr>
                @php
                    // Verificar si la clave 'ID' existe antes de eliminarla
                    if (isset($Table_name_columns[0])) {
                        unset($Table_name_columns[0]);
                    }
                @endphp
                @foreach ($Table_name_columns as $column)
                    <th scope="col">{{ $column }}</th>
                @endforeach
                @if ($accion)
                    <th scope="col">Acciones</th> <!-- Columna para acciones, mostrada si $accion es verdadero -->
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($data_table as $branch)
                <tr>
                    @php 
                        $branchID = $branch['ID'] ?? null; // Guardar el ID antes de eliminarlo
                        unset($branch['ID']); // Eliminar 'ID' antes de iterar
                    @endphp
                    @foreach ($branch as $key => $cell)
                        @if ($key === 'Google Maps')
                            <td data-label="{{ $key }}">
                                <a href="https://www.google.com/maps/place/{{ $cell }}" target="_blank">Link Google Maps</a>
                            </td>
                        @elseif ($key === 'Imagen')
                        <td data-label="{{ $key }}">
                            <a href="{{ Storage::url($cell) }}" target="_blank">Imagen</a>
                        </td>
                        @elseif ($key)
                        <td data-label="{{ $key }}">{{ $cell }}</td>
                        @endif
                    @endforeach
                    @if ($accion)
                        <td>
                            <a href="{{$url_columns}}/{{$branchID}}" onclick="{{$function}}" class="btn btn-primary">{{$especific}}</a><!-- Slot para acciones personalizadas -->
                        </td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($Table_name_columns) + ($accion ? 1 : 0) }}" style="text-align: center;">
                        No hay datos disponibles.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            let table = new DataTable('#{{$id_table}}', {
                responsive: true,
                maintainAspectRatio: false,
                lengthMenu: [1, 5, 10, 25, 50, 100, 500],
                destroy: true,
                ordering: false,
                order: [0, 'desc'],
                pageLength: 10,
                language: {
                    lengthMenu: "Mostrar _MENU_ registros...",
                    zeroRecords: "No se encontraron resultados",
                    info: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                    infoFiltered: "(filtrado de un total de _MAX_ registros)",
                    search: "Buscar:",
                    loadingRecords: "Cargando registros...",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Último"
                    },
                }
            });
        });
    </script>
@else
    <p>No hay datos disponibles.</p>
@endif



        