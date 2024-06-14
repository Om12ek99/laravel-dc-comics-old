<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {          //Crea una nuova tabella chiamata comics nel database. La funzione accetta una callback che riceve un'istanza di Blueprint utilizzata per definire le colonne della tabella.
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('description')->nullable();
            $table->string('publisher');
            $table->date('release_date');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }


    //in MySql
    // CREATE TABLE `comics` (
    //     `id` bigint unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //     `title` varchar(255) NOT NULL,
    //     `author` varchar(255) NOT NULL,
    //     `description` text NULL,
    //     `publisher` varchar(255) NOT NULL,
    //     `release_date` date NOT NULL,
    //     `price` decimal(8, 2) NOT NULL,
    //     `created_at` timestamp NULL DEFAULT NULL,
    //     `updated_at` timestamp NULL DEFAULT NULL
    //   );

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
