$(document).ready(function() {
    var table = $('#commodities').DataTable( {
        scrollY: '400px',
        scrollX: true,
        fixedColumns: {
            leftColumns: 2
        },
        lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50, 100, 'Todo'] ],
        order: [[ 3, 'asc' ]],
        processing: true,
        serverSide: true,
        ajax: "api/commodities",
        columns : [
            { data: 'code_product'},
            { data: 'description_product'},
            { data: 'number_invoice'},
            { data: 'date_invoice'},
            { data: 'qty', searchable: false},
            { data: 'unit', searchable: false},
            { data: 'unit_price_usd', searchable: false},
            { data: 'ctns', searchable: false},
            { data: 'pcs_per_package', searchable: false},
            { data: 'exchange_rate', searchable: false},
            { data: 'base_fob_without_lien', searchable: false},
            { data: 'lien', searchable: false},
            { data: 'selective', searchable: false},
            { data: 'safe_and_trasport', searchable: false},
            { data: 'customs_fees', searchable: false},
            { data: 'provider_expenses', searchable: false},
            { data: 'impairment_loss', searchable: false},
            { data: 'unique_cost', searchable: false},
            { data: 'wholesale', searchable: false},
            { data: 'retail_store', searchable: false},
            { data: 'wholesale_store', searchable: false}
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