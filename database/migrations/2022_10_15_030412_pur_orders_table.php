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
        Schema::create('pur_orders', function (Blueprint $table) {
            $table->id();

            $table->smallInteger('orderable_type')->default(0)->comment('구매 대상 타입');
            $table->unsignedBigInteger('orderable_id')->default(0)->comment('구매 대상 아이디');
            $table->smallInteger('orderer_type')->default(0)->comment('구매자 타입');
            $table->unsignedBigInteger('orderer_id')->default(0)->comment('구매자 아이디');
            $table->unsignedBigInteger('user_id')->nullable()->default(0)->comment('');


            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('pur_orders', function (Blueprint $table){
            $table->dropForeign('pur_orders_user_id_foreign');
        });

        Schema::drop('pur_orders');
    }
};
