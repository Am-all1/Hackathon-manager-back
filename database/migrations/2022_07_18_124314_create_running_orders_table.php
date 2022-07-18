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
        Schema::create('running_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // @guigui
            $table->unsignedBigInteger('group_id'); // @guigui
            $table->unsignedBigInteger('slot_id'); // @guigui
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
        Schema::dropIfExists('running_orders');
    }
};
