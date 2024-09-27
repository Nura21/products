<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("product_name", 150);
            $table->string("category", 100);
            $table->decimal("price", 10)->comment("
                Note that 10 is the precision, like 1234567891 has a precision of 10,
                And 2 is the default number of decimal places, ie 12345678.91 has a scale of 2
            ");
            $table->float("discount")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
