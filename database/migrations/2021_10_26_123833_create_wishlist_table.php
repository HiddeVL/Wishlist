<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist', function (Blueprint $table) {
            $table->id();
            $table->string('naam', 255)->nullable();
            $table->binary('plaatje')->nullable();
            $table->text('beschrijving')->nullable();
            $table->decimal('prijs', $precision = 10, $scale = 2)->nullable();
            $table->string("link", 255)->nullable();
            $table->time("updated_at");
            $table->time("created_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wishlist');
    }
}
