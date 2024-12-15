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
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->string("logo_atas_kiri");
            $table->string("logo_rak_atas");
            $table->string("logo_rak_bawah");
            $table->string("logo_rak_tengah");
            $table->string("logo_tengah");
            $table->string("logo_text");
            $table->string("logo_off");
            $table->string("logo_on");
            $table->string("logo_link");
            $table->string("logo_pdf");
            $table->string("logo_wa");
            $table->string("link_youtube");
            $table->string("link_browser");
            $table->string("link_pdf");
            $table->string("link_wa");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
