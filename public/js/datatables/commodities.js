$(document).ready(function() {
    var table = $('#commodities').DataTable( {
        scrollY: '400px',
        scrollX: true,
        fixedColumns: {
            leftColumns: 2
        },
        columnDefs: [
            { width: '1000px', targets: 1 }
        ],
        processing: true,
        serverSide: true,
        ajax: "api/commodities",
        columns : [
            { data: 'code_product'},
            { data: 'description_product'},
            { data: 'number_invoice'},
            { data: 'date_invoice'},
            { data: 'qty'},
            { data: 'unit'},
            { data: 'unit_price_usd'},
            { data: 'ctns'},
            { data: 'pcs_per_package'},
            { data: 'exchange_rate'},
            { data: 'base_fob_without_lien'},
            { data: 'lien'},
            { data: 'selective'},
            { data: 'safe_and_trasport'},
            { data: 'customs_fees'},
            { data: 'provider_expenses'},
            { data: 'impairment_loss'},
            { data: 'unique_cost'},
            { data: 'wholesale'},
            { data: 'retail_store'},
            { data: 'wholesale_store'}
        ],
        language: {
            decimal:        ",",
            emptyTable:     "No hay datos disponibles en la tabla",
            info:           "Mostrando _START_ a _END_ de _TOTAL_ filas",
            infoEmpty:      "Montrando 0 a 0 de 0 filas",
            infoFiltered:   "(Filtrados del _MAX_ filas totales)",
            infoPostFix:    "",
            thousands:      ".",
            lengthMenu:     "Mostrar _MENU_ filas",
            loadingRecords: "Cargando...",
            processing:     "Procesando...",
            search:         "Buscar:",
            zeroRecords:    "No se encontraron registros coincidentes",
            paginate: {
                first:      "Primero",
                last:       "Ultimo",
                next:       "Siguiente",
                previous:   "Anterior"
            },
            aria: {
                sortAscending:  ": activar para ordenar la columna ascendente",
                sortDescending: ": activar para ordenar la columna descendente"
            }
        }
    } );
});