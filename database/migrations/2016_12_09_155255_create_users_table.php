<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * The name of the database connection to use.
     *
     * @var string
     */
    protected $connection = 'mongodb';


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->
        table('Users', function (Blueprint $collection) {
            $collection->index('id');
            $collection->string('name');
            $collection->string('surname');
            $collection->unique('username');
            $collection->string('password',64);
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
        Schema::connection($this->connection)
            ->table('Users', function (Blueprint $collection)
            {
                $collection->drop();
            });
    }
}
