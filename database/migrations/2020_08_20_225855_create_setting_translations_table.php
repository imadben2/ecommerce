<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_translations', function (Blueprint $table) {
            $table->id();
       //     $table->integer('setting_id')->unique();
            $table->string('local')->unique();
            $table->LongText('value')->nullable();
            $table->unique(['setting_id','locale']);
            $table->foreignId('setting_id')->references('id')->on('settings')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('setting_translations');
    }
}
