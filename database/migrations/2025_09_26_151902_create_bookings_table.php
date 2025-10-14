<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            // $table->string('phone', 20);
            // $table->string('email');
            // $table->string('password');
            $table->unsignedBigInteger('apartment_id');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('payment_method');
            $table->string('proof_payment')->nullable();
            $table->text('requests')->nullable();
            $table->timestamps();
            $table->foreign('apartment_id')->references('id')->on('apartments')->onDelete('cascade');
            $table->unsignedBigInteger('fullname');
            $table->foreign('fullname')->references('id')->on('customers')->onDelete('cascade');


        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
