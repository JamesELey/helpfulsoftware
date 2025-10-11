<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('short_description');
            $table->string('logo')->nullable();
            $table->string('screenshot');
            $table->string('website_url')->nullable();
            $table->string('industry');
            $table->boolean('featured')->default(false);
            $table->json('metrics')->nullable();
            $table->text('testimonial')->nullable();
            $table->string('testimonial_author')->nullable();
            $table->string('testimonial_position')->nullable();
            $table->date('launch_date')->nullable();
            $table->string('status')->default('active');
            $table->json('technologies')->nullable();
            $table->text('challenges')->nullable();
            $table->text('solutions')->nullable();
            $table->text('results')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('brands');
    }
};
