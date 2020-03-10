<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syrats', function (Blueprint $table) {
            $table->id();
            $table->string('syrat');
            $table->timestamps();
        });

        Schema::table('syrats', function (Blueprint $table) {
            $table->foreignId('layanan_id')
                ->constrained()
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syrats');
    }
}
