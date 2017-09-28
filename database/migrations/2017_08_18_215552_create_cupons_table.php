<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupons', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('identification')->nullable();
            $table->mediumText('secuential')->nullable();
            $table->mediumText('box')->nullable();
            $table->mediumText('folder')->nullable();
            $table->mediumText('file_name')->nullable();
            $table->boolean('status')->default(true);
            // False means no is present in folder location
            $table->boolean('files_is_accesible')->default(true);

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
        Schema::dropIfExists('cupons');
    }
}
