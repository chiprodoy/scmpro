<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class MenuRole extends Migration
{
    use CostumDbMigration;
    public $tb='menu_role';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {
            Schema::create($this->tb, function (Blueprint $table) {
                $table->id();
                $table->integer('menu_id');
                $table->integer('role_id');

            });
            if(method_exists($this,'powerup')) $this->powerup();

        }   //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
