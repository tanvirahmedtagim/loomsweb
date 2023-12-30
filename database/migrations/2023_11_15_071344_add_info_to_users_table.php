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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('role')->default('admin');
            $table->string('gender')->nullable();
            $table->string('mobile')->nullable();
            $table->text('description')->nullable();
            $table->string('dob')->nullable();
            $table->text('experience')->nullable();
            $table->text('expertise')->nullable();
            $table->integer('preferred_type')->nullable();
            $table->integer('max_price')->nullable();
            $table->integer('min_price')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
