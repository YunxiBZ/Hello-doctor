<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractitionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('email', 255);
            $table->string('address', 255);
            $table->string('zipcode', 5);
            $table->string('city', 50);
            $table->timestamps();

            // create relation's colonnes, make relations with foreign key
            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->foreignId('user_id')->constrained();
            $table->foreignId('specialty_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practitioners');
    }
}
