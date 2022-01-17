<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateSellTransactionItemsTable extends Migration
{
    use CostumDbMigration;
    public $tb='sell_transaction_items';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('sell_transaction_items', function (Blueprint $table) {
                $table->id();
                $table->integer('sell_transaction_id');
                $table->integer('inventory_item_id');
                $table->integer('qty');
                $table->decimal('price');
                $table->integer('unit_measure_id');
                $table->decimal('percentage_dicount');
                $table->decimal('amount_dicount');
                $table->decimal('total_price');





            });
            if(method_exists($this,'powerup')) $this->powerup();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sell_transaction_items');
    }
}
