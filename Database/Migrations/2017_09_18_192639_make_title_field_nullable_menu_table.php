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
        Schema::table('menu__menu_translations', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
        });
        Schema::table('menu__menuitems', function (Blueprint $table) {
            $table->string('class')->nullable()->change();
        });
        Schema::table('menu__menuitem_translations', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('menu__menu_translations', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
        });
        Schema::table('menu__menuitems', function (Blueprint $table) {
            $table->string('class')->nullable(false)->change();
        });
        Schema::table('menu__menuitem_translations', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
        });
    }
};
