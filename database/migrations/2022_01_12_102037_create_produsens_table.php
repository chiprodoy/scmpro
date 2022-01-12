<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateProdusensTable extends Migration
{
    use CostumDbMigration;
    public $tb='produsens';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('produsens', function (Blueprint $table) {
                $table->id();
                $table->string('produsen_name');
                $table->string('address');
                $table->string('phone');

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
        Schema::dropIfExists('produsens');
    }
}
