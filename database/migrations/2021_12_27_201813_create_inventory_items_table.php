<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateInventoryItemsTable extends Migration
{
    use CostumDbMigration;
    public $tb='inventory_items';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('inventory_items', function (Blueprint $table) {
                $table->id();
                $table->string('name');

                $table->integer('produsen_id');
                $table->integer('inventory_id');
                $table->integer('unit_measure_id');
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
        Schema::dropIfExists('inventory_items');
    }
}
