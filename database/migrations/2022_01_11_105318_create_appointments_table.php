<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reason', 255);
            $table->timestamp('meet_at');
            $table->enum('status', ['active', 'canceled']);
            $table->timestamps();

            // create relation's colonnes, make relations with foreign key
            // https://laravel.com/docs/8.x/migrations#foreign-key-constraints
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('practitioner_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
