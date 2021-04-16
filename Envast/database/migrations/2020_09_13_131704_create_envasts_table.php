<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envasts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membre');
            $table->string('tache');
            $table->longText('description');
            $table->string('status');
            $table->string('Release_date');
            $table->string('estimation_time');
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
        Schema::dropIfExists('envasts');
    }
}
