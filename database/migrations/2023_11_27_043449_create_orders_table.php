<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_code')->unique()->nullable();
            $table->string('order_name')->nullable();
            $table->string('order_address')->nullable();
            $table->string('no_hp');
            $table->string('email');
            $table->string('design_link')->nullable();
            // $table->integer('quantity');
            $table->text('description');
            $table->enum('payment_status', ['Belum Bayar', 'Sudah Bayar']);
            $table->enum('order_status', ['Belum diproses', 'Sedang diproses', 'Selesai', 'Dikirim']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
