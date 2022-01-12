<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateInventoryStockInsTable extends Migration
{
    use CostumDbMigration;
    public $tb='inventory_stock_trxs';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('inventory_stock_trxs', function (Blueprint $table) {
                $table->id();
                $table->integer('inventory_item_id');
                $table->string('stock_trx_number');
                $table->integer('inout'); //1 in //2 out
                $table->double('count')->default(1);
                $table->integer('employee_id');
                $table->text('stock_trx_note');
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
        Schema::dropIfExists('inventory_stock_ins');
    }
}
