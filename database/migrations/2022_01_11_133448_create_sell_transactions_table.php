<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\MF\CostumDbMigration;

class CreateSellTransactionsTable extends Migration
{
    use CostumDbMigration;
    public $tb='sell_transactions';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable($this->tb)) {

            Schema::create('sell_transactions', function (Blueprint $table) {
                $table->id();
                $table->integer('inventory_item_id');
                $table->string('invoice_number');
                $table->date('invoice_date');
                $table->integer('costumer_id');
                $table->integer('due_date');
                $table->integer('status_invoice'); //1=belum lunas, 2=lunas
                $table->integer('employee_id');
                $table->integer('total');
                $table->decimal('discount');
                $table->integer('grand_total');
                $table->text('note');


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
        Schema::dropIfExists('sell_transactions');
    }
}
