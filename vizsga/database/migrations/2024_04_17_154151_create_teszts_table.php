<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });

        Teszt::create(['kerdes' => 'A paradicsom melyik növény termése?', 'v1' => 'Fűszer', 'v2' => 'Zöldség', 'v3' => 'Gyümölcs', 'v4' => 'Gomba', 'helyes' => 'v3', 'kategoriaId' => '1']);
        Teszt::create(['kerdes' => 'Melyik a legjobb programozási nyelv?', 'v1' => 'Java', 'v2' => 'C++', 'v3' => 'Python', 'v4' => 'PHP', 'helyes' => 'v3', 'kategoriaId' => '2']);
        Teszt::create(['kerdes' => 'Melyek konstansok a PHP-ban?', 'v1' => 'define', 'v2' => 'const', 'v3' => 'let', 'v4' => 'var', 'helyes' => 'v1', 'kategoriaId' => '2']);
        Teszt::create(['kerdes' => 'Fogmosásnál melyik a legfontosabb?', 'v1' => 'Fogkrém', 'v2' => 'Fogkefe', 'v3' => 'Fogselyem', 'v4' => 'Víz', 'helyes' => 'v2', 'kategoriaId' => '1']);
        Teszt::create(['kerdes' => 'Melyik a legnagyobb szám?', 'v1' => '1', 'v2' => '2', 'v3' => '3', 'v4' => '4', 'helyes' => 'v4', 'kategoriaId' => '3']);
        Teszt::create(['kerdes' => 'Melyik a legkisebb szám?', 'v1' => '1', 'v2' => '2', 'v3' => '3', 'v4' => '4', 'helyes' => 'v1', 'kategoriaId' => '3']);
        Teszt::create(['kerdes' => 'Mikor volt a második világháború vége?', 'v1' => '1945', 'v2' => '1946', 'v3' => '1947', 'v4' => '1948', 'helyes' => 'v1', 'kategoriaId' => '4']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
