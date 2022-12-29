<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_slides', function (Blueprint $table) {
            $table->string('title_ru')->after('title');
            $table->string('description_ru')->after('description');
            $table->text('image')->after('description_ru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('main_slides', function (Blueprint $table) {
            $table->dropColumn(['title_ru', 'description_ru', 'image']);
        });
    }
};
