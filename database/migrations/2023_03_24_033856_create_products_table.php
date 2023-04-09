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
            $table->increments('id');
            $table->string('name',100);
            $table->string('available')->default(1);
            $table->double('price');
            $table->double('offer');
            $table->text('details');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')
                ->references('id')->on('genders')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('company_id')->unsigned();
            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('material_id')->unsigned();
            $table->foreign('material_id')
                ->references('id')->on('materials')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
