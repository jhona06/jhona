<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Assuming orders are linked to users
            $table->foreignId('item_id')->constrained('menu_items')->onDelete('cascade'); // Assuming a relationship with 'menu_items' table
            $table->integer('quantity');
            $table->decimal('total', 10, 2); // Total price
            $table->string('status')->default('pending'); // Order status
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
