<?php

namespace App\Repositories;

use App\Models\Commodity;
use App\Repositories\BaseRepository;

/**
 * Class CommodityRepository
 * @package App\Repositories
 * @version August 21, 2019, 3:39 am UTC
*/

class CommodityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Commodity::class;
    }
}
