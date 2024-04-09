<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('web_design');
            $table->string('web_development');
            $table->string('graphic_design');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
