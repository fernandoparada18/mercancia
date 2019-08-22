<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Commodity
 * @package App\Models
 * @version August 21, 2019, 3:39 am UTC
 *
 * @property string number_invoice
 * @property string date_invoice
 * @property string code_product
 * @property string description_product
 * @property integer qty
 * @property string unit
 * @property float unit_price_usd
 * @property integer ctns
 * @property integer pcs_per_package
 * @property float exchange_rate
 * @property float base_fob_without_lien
 * @property float lien
 * @property float selective
 * @property float safe_and_trasport
 * @property float customs_fees
 * @property float provider_expenses
 * @property float impairment_loss
 * @property float unique_cost
 * @property float wholesale
 * @property float retail_store
 * @property float wholesale_store
 */
class Commodity extends Model
{
    use SoftDeletes;

    public $table = 'commodities';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'number_invoice' => 'string',
        'date_invoice' => 'date:d-m-Y',
        'code_product' => 'string',
        'description_product' => 'string',
        'qty' => 'integer',
        'unit' => 'string',
        'unit_price_usd' => 'decimal:2',
        'ctns' => 'integer',
        'pcs_per_package' => 'integer',
        'exchange_rate' => 'decimal:2',
        'base_fob_without_lien' => 'decimal:2',
        'lien' => 'decimal:2',
        'selective' => 'decimal:2',
        'safe_and_trasport' => 'decimal:2',
        'customs_fees' => 'decimal:2',
        'provider_expenses' => 'decimal:2',
        'impairment_loss' => 'decimal:2',
        'unique_cost' => 'decimal:2',
        'wholesale' => 'decimal:2',
        'retail_store' => 'decimal:2',
        'wholesale_store' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'number_invoice' => 'required',
        'date_invoice' => 'required',
        'code_product' => 'required',
        'description_product' => 'required',
        'unit' => 'required'
    ];

    
}
