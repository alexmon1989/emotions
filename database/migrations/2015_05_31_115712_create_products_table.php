<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('description_short');
            $table->text('description_full');
            $table->float('price_new');
            $table->float('price_old');
            $table->string('file_name')->default('no.jpg');
            $table->boolean('is_on_main');
            $table->boolean('enabled')->default(FALSE);
            $table->integer('product_type_id')->unsigned();
            $table->timestamps();

            $table->foreign('product_type_id')
                ->references('id')->on('product_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }

}
