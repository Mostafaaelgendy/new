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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('Description');
            $table->unsignedBigInteger('productid');
            $table->foreign('productid')->references('id')->on('products')->onDelete('cascade');
            $table->double('discountpercentage');
            $table->double('price_after');
            $table->timestamps();

        });

        DB::statement('ALTER TABLE offers ADD CONSTRAINT chk_percentage_upper CHECK (discountpercentage < 1);');

        DB::statement('ALTER TABLE offers ADD CONSTRAINT chk_percentage_lower CHECK (discountpercentage >0);');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
