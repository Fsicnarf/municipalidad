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
        Schema::create('asistencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('responsable_id');
            $table->unsignedBigInteger('actividad_id');
            $table->boolean('asistio');
            $table->timestamps();

            $table->foreign('responsable_id')
                ->references('id')
                ->on('responsables')
                ->onDelete('cascade');

            $table->foreign('actividad_id')
                ->references('id')
                ->on('actividades')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia');
    }
};
