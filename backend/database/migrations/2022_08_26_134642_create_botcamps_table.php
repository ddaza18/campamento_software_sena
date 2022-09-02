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
        Schema::create('botcamps', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description');
            $table->string('website',70);
            $table->string('phone',20);
            $table->float('average_rating',2,1);
            $table->float('average_cost',8,2);
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('botcamps');
    }
};
