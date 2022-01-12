<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateMenusTable extends Migration
{
    use CostumDBMigration;
    public $tb='menus';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('menus', function (Blueprint $table) {
                $table->id();
                $table->integer('parent_id');
                $table->string('menu_name');
                $table->string('url');
                $table->string('icon');
                $table->integer('sort_order');

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
        Schema::dropIfExists('menus');
    }
}
