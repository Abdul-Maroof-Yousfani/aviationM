<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id(); // Auto-incrementing BIGINT UNSIGNED primary key
            $table->foreignId('sales_order_id')->constrained('sales_orders')->onDelete('cascade'); // Foreign key to sales_orders
            $table->string('ticket_number')->unique(); // Unique ticket number
            $table->string('city'); // City information
            $table->string('fi_no'); // Flight information
            $table->string('ci'); // Check-in information
            $table->date('dep_date'); // Departure date
            $table->time('dep_time'); // Departure time
            $table->time('arr_time'); // Arrival time
            $table->string('fare_basis'); // Fare basis information
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
