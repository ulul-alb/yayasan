<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->dropColumn('age'); // Hapus kolom age
            $table->string('lokasi')->nullable(); // Tambahkan kolom lokasi
        });
    }

    public function down()
    {
        Schema::table('programs', function (Blueprint $table) {
            $table->integer('age')->nullable(); // Tambahkan kembali age jika rollback
            $table->dropColumn('lokasi'); // Hapus lokasi jika rollback
        });
    }
};

