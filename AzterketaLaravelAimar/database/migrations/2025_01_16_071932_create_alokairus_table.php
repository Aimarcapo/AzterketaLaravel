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
        
        Schema::create('alokairus', function (Blueprint $table) {
            $table->id();
            $table->string('alokatzailea');
            $table->unsignedBigInteger('etxe_id');
            $table->index('etxe_id');
            $table->foreign('etxe_id')->references('id')->on('etxes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alokairus');
    }
};
