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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable()->comment('이름');
            $table->string('email')->nullable()->comment('이메일');
            $table->smallInteger('state')->default(0)->comment('상태');
            $table->string('mobile',30)->default(010-0000-0000)->comment('전화번호');

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
        Schema::dropIfExists('users', function (Blueprint $table){
        });
    }
};
