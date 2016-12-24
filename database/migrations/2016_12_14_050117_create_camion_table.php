<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('camion', function (Blueprint $table) {
            $table->index('id');
            $table->string('immatriculation');
            $table->string('code');
            $table->index('livraison_id');
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
        Schema::table('camion', function (Blueprint $table) {
            $table->drop();
        });
    }
}
