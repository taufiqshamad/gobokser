<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipe_service');
            $table->text('lokasi');
            $table->string('tipe_kendaraan');
            $table->string('no_polisi');
            $table->text('keluhan');
            $table->string('no_antrian')->nullable();
            $table->integer('bengkel_id')->nullable();
            $table->boolean('bookingComplete')->default('0');
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
        Schema::dropIfExists('bookings');
    }
}
