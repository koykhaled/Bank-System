<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transfares', function (Blueprint $table) {
            $table->id();

            $table->string('from');
            $table->foreign('from')->references('account')->on('customers')->onDelete('cascade');

            $table->string('to');
            $table->foreign('to')->references('account')->on('customers')->onDelete('cascade');

            $table->decimal('amount');
            $table->timestamp('transfared_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfares');
    }
};