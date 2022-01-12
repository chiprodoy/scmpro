<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateUnitMeasuresTable extends Migration
{
    use CostumDbMigration;
    public $tb='unit_measures';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {
            Schema::create('unit_measures', function (Blueprint $table) {
            $table->id();
            $table->string('unit_code');
            $table->string('unit_name');

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
        Schema::dropIfExists('unit_measures');
    }
}
