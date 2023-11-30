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
        Schema::create('section_titles', function (Blueprint $table) {
            $table->id();
            $table->text('key')->nullable();
            $table->text('value')->nullable();
            $table->timestamps();
            // Why choose us x 3
            // why_choose_top_title => why choose us

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_titles');
    }
};
