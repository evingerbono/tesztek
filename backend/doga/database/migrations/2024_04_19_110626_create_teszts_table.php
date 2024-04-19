<?php

use App\Models\teszt;
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

        teszt::create(['kerdes'=>'A papírt milyen színű kukába gyűjtjük?','v1'=>'kék','v2'=>'piros','v3'=>'szürke','v4'=>'sárga','kategoriaId'=>1]);
        teszt::create(['kerdes'=>'A műanyagot milyen színű kukába gyűjtjük?','v1'=>'sárga','v2'=>'piros','v3'=>'szürke','v4'=>'kék','kategoriaId'=>3]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }
};
