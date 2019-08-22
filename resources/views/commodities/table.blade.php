@section('css')
    @include('layouts.datatables_css')
@endsection

<table id="commodities" width="100%" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Código</th>
            <th>Descripción del Producto</th>
            <th>No. Factura</th>
            <th>Fecha</th>
            <th>Qty</th>
            <th>Unit</th>
            <th>Unit Price US$</th>
            <th>CTNS</th>
            <th>PCS Por Bulto</th>
            <th>Tasa de Cambio RD$/US$</th>
            <th>Base FOB sin Gravamen</th>
            <th>Gravamen</th>
            <th>Selectivo</th>
            <th>Seguro y Transporte</th>
            <th>Gastos de Aduana</th>
            <th>Gasto financiamiento proveedores</th>
            <th>Pérdida por deterioro</th>
            <th>Costo Unico - RD$/U.</th>
            <th>Venta al Mayor</th>
            <th>Venta al Detal Tienda</th>
            <th>Venta al Mayor Tienda</th>
        </tr>
    </thead>
</table>

@section('scripts')
    @include('layouts.datatables_js')
    <script src="{{ asset('js/datatables/commodities.js') }}"></script>
@endsection