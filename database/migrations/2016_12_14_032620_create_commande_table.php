<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commande', function (Blueprint $table) {
            $table->index('id');
            $table->index('pointLivraison_id');
            $table->index('livraison_id');
            $table->string('priority');
            $table->string('description');
            $table->string('status');
            $table->date('end')->nullable();
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
        Schema::table('commande', function (Blueprint $table) {
            $table->drop();
        });
    }
}
