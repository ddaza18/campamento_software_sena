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
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description');
            $table->string('phone',20);
            $table->string('website',60);
            $table->float('average_rating', 2, 1);
            $table->float('average_cost', 8, 2);
            $table->foreingId('user_id')->constrained();
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
        Schema::dropIfExists('bootcamps');
    }
};
