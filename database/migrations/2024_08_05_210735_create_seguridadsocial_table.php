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
        Schema::create('seguridadsocial', function (Blueprint $table) {
            $table->string('id_seguridad_social', 10)->primary();
            $table->string('nro_documento_empleado', 10)->nullable();
            $table->string('nombre_seguridad_social', 50)->nullable();
            $table->decimal('porcentaje_empleado', 5, 2)->nullable();
            $table->decimal('porcentaje_empleador', 5, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seguridadsocial');
    }
};
