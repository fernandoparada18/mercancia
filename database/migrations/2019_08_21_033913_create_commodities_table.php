<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommoditiesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number_invoice');
            $table->date('date_invoice');
            $table->string('code_product');
            $table->string('description_product');
            $table->integer('qty')->nullable();
            $table->enum('unit', ['PCS','SETS','CARDS','BAGS','PAIRS']);
            $table->decimal('unit_price_usd', 14, 2)->nullable();
            $table->integer('ctns')->nullable();
            $table->integer('pcs_per_package')->nullable();
            $table->decimal('exchange_rate', 14, 2)->nullable();
            $table->decimal('base_fob_without_lien', 14, 2)->nullable();
            $table->decimal('lien', 14, 2)->nullable();
            $table->decimal('selective', 14, 2)->nullable();
            $table->decimal('safe_and_trasport', 14, 2)->nullable();
            $table->decimal('customs_fees', 14, 2)->nullable();
            $table->decimal('provider_expenses', 14, 2)->nullable();
            $table->decimal('impairment_loss', 14, 2)->nullable();
            $table->decimal('unique_cost', 14, 2)->nullable();
            $table->decimal('wholesale', 14, 2)->nullable();
            $table->decimal('retail_store', 14, 2)->nullable();
            $table->decimal('wholesale_store', 14, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('commodities');
    }
}
