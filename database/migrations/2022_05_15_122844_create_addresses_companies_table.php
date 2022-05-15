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
        Schema::create('addresses_companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companies_id');
            $table->unsignedBigInteger('addresses_id');

            $table->foreign('companies_id')
                ->references('id')
                ->on('companies');

            $table->foreign('addresses_id')
                ->references('id')
                ->on('addresses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses_companies');
    }
};
