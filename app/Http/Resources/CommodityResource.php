<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommodityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'number_invoice' => $this->number_invoice,
            'date_invoice' => $this->date_invoice->format('d-m-Y'),
            'code_product' => $this->code_product,
            'description_product' => $this->description_product,
            'qty' => $this->qty,
            'unit' => $this->unit,
            'unit_price_usd' => number_format($this->unit_price_usd, 2, ',', '.'),
            'ctns' => $this->ctns,
            'pcs_per_package' => $this->pcs_per_package,
            'exchange_rate' => number_format($this->exchange_rate, 2, ',', '.'),
            'base_fob_without_lien' => number_format($this->base_fob_without_lien, 2, ',', '.'),
            'lien' => number_format($this->lien, 2, ',', '.'),
            'selective' => number_format($this->selective, 2, ',', '.'),
            'safe_and_trasport' => number_format($this->safe_and_trasport, 2, ',', '.'),
            'customs_fees' => number_format($this->customs_fees, 2, ',', '.'),
            'provider_expenses' => number_format($this->provider_expenses, 2, ',', '.'),
            'impairment_loss' => number_format($this->impairment_loss, 2, ',', '.'),
            'unique_cost' => number_format($this->unique_cost, 2, ',', '.'),
            'wholesale' => number_format($this->wholesale, 2, ',', '.'),
            'retail_store' => number_format($this->retail_store, 2, ',', '.'),
            'wholesale_store' => number_format($this->wholesale_store, 2, ',', '.')
        ];
    }
}
