<?php

use App\Models\Product;
use App\Models\Type;
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
        Schema::create('product_type_pivot', function (Blueprint $table) {
            $table->foreignIdFor(Product::class);
            $table->foreignIdFor(Type::class);
            $table->primary(['product_id', 'type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_type_pivot');
    }
};
