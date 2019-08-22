<?php

namespace App\DataTables;

use App\Models\Commodity;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CommodityDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'commodities.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Commodity $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Commodity $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'number_invoice',
            'date_invoice',
            'code_product',
            'description_product',
            'qty',
            'unit',
            'unit_price_usd',
            'ctns',
            'pcs_per_package',
            'exchange_rate',
            'base_fob_without_lien',
            'lien',
            'selective',
            'safe_and_trasport',
            'customs_fees',
            'provider_expenses',
            'impairment_loss',
            'unique_cost',
            'wholesale',
            'retail_store',
            'wholesale_store'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'commoditiesdatatable_' . time();
    }
}
