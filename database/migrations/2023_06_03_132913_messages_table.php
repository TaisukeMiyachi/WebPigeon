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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();  // id
            $table->foreignId('user_id')->constrained();  // user_id
            $table->text('message');  // Message
            $table->string('image_name')->nullable();  // image_name
            $table->string('teacher_name');  // teacher_name
            $table->integer('send_to');  // send_to
            $table->timestamps();  // Timestump
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
