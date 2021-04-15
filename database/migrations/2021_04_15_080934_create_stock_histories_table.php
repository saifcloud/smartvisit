<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->double('buying_price',10,2);
            $table->double('selling_price',10,2);
            $table->date('date');
            $table->date('stock_end_date');
            $table->integer('status')->default(1)->comment('1=>active');
            $table->integer('is_deleted')->default(0)->comment('1=>deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_histories');
    }
}
