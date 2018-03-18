<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->foreign("user_id")->references("id")->on("users");
			$table->timestamp("date_bought")->useCurrent();
			$table->string("name", 50 );//->after("user_id");
			$table->integer("qty")->unsigned;//()->after("name");
			$table->double("price", 20, 5 );//->after("qty");
			$table->text("description")->nullable();//->after("price")
			$table->text("notes")->nullable();//->after("description")
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
        Schema::dropIfExists('items');
    }
}
