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
        Schema::create('comunicaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('responsable_id');
            $table->text('mensaje');
            $table->timestamp('fecha_envio');
            $table->timestamps();

            $table->foreign('responsable_id')
                ->references('id')
                ->on('responsables')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comunicaciones');
    }
};
