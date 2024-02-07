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
        Schema::create('group-users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('users_id');
            $table->unsignedBiginteger('groups_id');

            $table->foreign('users_id')->references('id')
                 ->on('users')->onDelete('cascade');
            $table->foreign('groups_id')->references('id')
                ->on('groups')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group-users');
    }
};
