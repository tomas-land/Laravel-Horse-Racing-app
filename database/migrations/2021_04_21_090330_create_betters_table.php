<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('betters', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('surname', 150);
            $table->decimal('bet', $precision = 8, $scale = 2);
            $table->bigInteger('horse_id')->unsigned();
            $table->foreign('horse_id')->references('id')->on('horses');
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
        Schema::dropIfExists('betters');
    }
}
