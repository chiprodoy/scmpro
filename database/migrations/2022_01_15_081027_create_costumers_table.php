<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateCostumersTable extends Migration
{
    use CostumDbMigration;
    public $tb='costumers';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {
            Schema::create('costumers', function (Blueprint $table) {
                $table->id();
                $table->string('costumer_code');
                $table->string('costumer_name');
                $table->string('costumer_address');

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
        Schema::dropIfExists('costumers');
    }
}
