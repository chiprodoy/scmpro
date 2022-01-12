<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateInventoryStocksTable extends Migration
{
    use CostumDbMigration;
    public $tb='inventory_stocks';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('inventory_stocks', function (Blueprint $table) {
                $table->id();
                $table->integer('inventory_item_id');
                $table->string('code_number');
                $table->date('entry_date');
                $table->date('expire_date');
                $table->double('count')->default(1);

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
        Schema::dropIfExists('inventory_stocks');
    }
}
