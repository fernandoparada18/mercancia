<?php

namespace App\Imports;

use App\Models\Commodity;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class CommoditiesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Commodity([
            'number_invoice' => $row[0],
            'date_invoice' => $row[1],
            'code_product' => $row[2],
            'description_product' => $row[4],
            'qty' => $row[5],
            'unit' => $row[6],
            'unit_price_usd' => $row[7],
            'ctns' => $row[8],
            'pcs_per_package' => $row[9],
            'exchange_rate' => $row[10],
            'base_fob_without_lien' => $row[11],
            'lien' => $row[12],
            'selective' => $row[13],
            'safe_and_trasport' => $row[14],
            'customs_fees' => $row[15],
            'provider_expenses' => $row[16],
            'impairment_loss' => $row[17],
            'unique_cost' => $row[18],
            'wholesale' => $row[19],
            'retail_store' => $row[20],
            'wholesale_store' => $row[21]
        ]);
    }
}
