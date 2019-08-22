<!-- Number Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('number_invoice', 'Number Invoice:') !!}
    {!! Form::text('number_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_invoice', 'Date Invoice:') !!}
    {!! Form::text('date_invoice', null, ['class' => 'form-control','id'=>'date_invoice']) !!}
</div>

@section('scripts')
   <script type="text/javascript">
           $('#date_invoice').datetimepicker({
               format: 'YYYY-MM-DD HH:mm:ss',
               useCurrent: true,
               icons: {
                   up: "icon-arrow-up-circle icons font-2xl",
                   down: "icon-arrow-down-circle icons font-2xl"
               },
               sideBySide: true
           })
       </script>
@endsection

<!-- Code Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_product', 'Code Product:') !!}
    {!! Form::text('code_product', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description_product', 'Description Product:') !!}
    {!! Form::text('description_product', null, ['class' => 'form-control']) !!}
</div>

<!-- Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty', 'Qty:') !!}
    {!! Form::number('qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit', 'Unit:') !!}
    {!! Form::select('unit', ['PCS' => 'PCS', 'SETS' => 'SETS', 'CARDS' => 'CARDS', 'BAGS' => 'BAGS', 'PAIRS' => 'PAIRS'], null, ['class' => 'form-control']) !!}
</div>

<!-- Unit Price Usd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_price_usd', 'Unit Price Usd:') !!}
    {!! Form::text('unit_price_usd', null, ['class' => 'form-control']) !!}
</div>

<!-- Ctns Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ctns', 'Ctns:') !!}
    {!! Form::number('ctns', null, ['class' => 'form-control']) !!}
</div>

<!-- Pcs Per Package Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pcs_per_package', 'Pcs Per Package:') !!}
    {!! Form::number('pcs_per_package', null, ['class' => 'form-control']) !!}
</div>

<!-- Exchange Rate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exchange_rate', 'Exchange Rate:') !!}
    {!! Form::text('exchange_rate', null, ['class' => 'form-control']) !!}
</div>

<!-- Base Fob Without Lien Field -->
<div class="form-group col-sm-6">
    {!! Form::label('base_fob_without_lien', 'Base Fob Without Lien:') !!}
    {!! Form::text('base_fob_without_lien', null, ['class' => 'form-control']) !!}
</div>

<!-- Lien Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lien', 'Lien:') !!}
    {!! Form::text('lien', null, ['class' => 'form-control']) !!}
</div>

<!-- Selective Field -->
<div class="form-group col-sm-6">
    {!! Form::label('selective', 'Selective:') !!}
    {!! Form::text('selective', null, ['class' => 'form-control']) !!}
</div>

<!-- Safe And Trasport Field -->
<div class="form-group col-sm-6">
    {!! Form::label('safe_and_trasport', 'Safe And Trasport:') !!}
    {!! Form::text('safe_and_trasport', null, ['class' => 'form-control']) !!}
</div>

<!-- Customs Fees Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customs_fees', 'Customs Fees:') !!}
    {!! Form::text('customs_fees', null, ['class' => 'form-control']) !!}
</div>

<!-- Provider Expenses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provider_expenses', 'Provider Expenses:') !!}
    {!! Form::text('provider_expenses', null, ['class' => 'form-control']) !!}
</div>

<!-- Impairment Loss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('impairment_loss', 'Impairment Loss:') !!}
    {!! Form::text('impairment_loss', null, ['class' => 'form-control']) !!}
</div>

<!-- Unique Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unique_cost', 'Unique Cost:') !!}
    {!! Form::text('unique_cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Wholesale Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wholesale', 'Wholesale:') !!}
    {!! Form::text('wholesale', null, ['class' => 'form-control']) !!}
</div>

<!-- Retail Store Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retail_store', 'Retail Store:') !!}
    {!! Form::text('retail_store', null, ['class' => 'form-control']) !!}
</div>

<!-- Wholesale Store Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wholesale_store', 'Wholesale Store:') !!}
    {!! Form::text('wholesale_store', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('commodities.index') !!}" class="btn btn-default">Cancel</a>
</div>
