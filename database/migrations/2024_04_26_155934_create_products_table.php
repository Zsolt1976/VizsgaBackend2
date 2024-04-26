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
            $table->string('name', 80);
            $table->string('quantity_unit', 20);
            $table->string('unit', 30);
            $table->foreignIdFor(\App\Models\Type::class)->constrained();
            $table->integer('invQty');
            $table->string('other', 80);
            $table->foreignIdFor(\App\Models\Manufacturer::class)->constrained();
            $table->date('consumable');
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
