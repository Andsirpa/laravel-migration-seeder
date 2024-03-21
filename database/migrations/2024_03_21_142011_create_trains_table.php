<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            // assegno le colonne
            $table->id();
            // $table->tipo di dato('nome_colonna', varchar)
            $table->string('company', 50);
            $table->string('from', 50);
            $table->string('to', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code', 15)->unique();
            $table->tinyInteger('coaches_number')->nullable();
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
