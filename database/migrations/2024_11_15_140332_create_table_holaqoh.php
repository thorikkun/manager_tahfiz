<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_holaqoh', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->id('id_ustad');
            $table->id('id_santri');
            $table->string('jenis');
            $table->string('catatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_holaqoh');
    }
};
