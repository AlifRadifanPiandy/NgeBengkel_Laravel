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
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->enum('service_type', ['repair', 'wash']);
            $table->string('name');
            $table->enum('vehicle_type', ['car', 'motorcycle']);
            $table->enum('transmission', ['manual', 'automatic']);
            $table->string('license_plate');
            $table->date('date');
            $table->text('notes')->nullable();
            $table->string('ammount');
            $table->enum('status', ['stand_by', 'on_process', 'done'])->default('stand_by');
            $table->foreignId('spareparts_id')->nullable()->constrained('spareparts')->onDelete('cascade');
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
