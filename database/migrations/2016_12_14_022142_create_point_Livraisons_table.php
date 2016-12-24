<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointLivraisonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointLivraison', function (Blueprint $collection) {
            $collection->index('id');
            $collection->string('name');
            $collection->string('localisation');
            $collection->double('longitude');
            $collection->double('lattitude');
            $collection->string('description');
            $collection->integer('ordre');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pointLivraison', function (Blueprint $table) {
            $table->drop();
        });
    }
}
