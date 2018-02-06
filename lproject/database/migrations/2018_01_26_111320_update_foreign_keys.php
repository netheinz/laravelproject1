<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('songs', function (Blueprint $table) {
            $table->foreign('artist_id')->references("id")->on('artists');
        });

        Schema::table('albumsongs', function (Blueprint $table) {
            $table->foreign('album_id')->references("id")->on('albums');
            $table->foreign('song_id')->references("id")->on('songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
