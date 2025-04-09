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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');                         // e.g., "Amazon $25 Gift Card"
            $table->string('brand');                        // e.g., "Amazon"
            $table->decimal('amount', 8, 2);                // Gift card value (e.g., 25.00)
            $table->decimal('price', 8, 2);                 // Sale price (may be discounted)
            $table->string('currency')->default('CAD');     // Currency code
            $table->text('description')->nullable();        // Description or promo message
            $table->string('image')->nullable();            // Image URL or filename
            $table->string('category')->nullable();         // Optional category/tag
            $table->integer('available_stock')->default(0); // Stock count
            $table->boolean('is_active')->default(true);    // Visibility toggle
            $table->timestamps();                           // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};