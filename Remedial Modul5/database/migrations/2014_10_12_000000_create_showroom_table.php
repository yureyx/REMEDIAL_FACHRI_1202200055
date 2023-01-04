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
        Schema::create('showrooms', function (Blueprint $table) {
            $table->bigInteger('id')->unique();
            $table->bigInteger('user_id')->unique();
            $table->varchar('name');
            $table->varchar('owner');
            $table->varchar('brand');
            $table->dateTime('purchase_date');
            $table->text('descrption');
            $table->varchar('image');
            $table->enum('status')('lunas','belum-lunas');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('update_at');
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showrooms');
    }
};
