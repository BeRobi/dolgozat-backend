<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id();       
            $table->string('kategorianev');
            $table->timestamps();
        });

        Kategoria::create(['kategorianev' => 'Természetvédelem']);
        Kategoria::create(['kategorianev' => 'Programozás']);
        Kategoria::create(['kategorianev' => 'Matematika']);
        Kategoria::create(['kategorianev' => 'Fizika']);
        Kategoria::create(['kategorianev' => 'Történelem']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
