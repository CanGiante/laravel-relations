<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_tag', function (Blueprint $table) {
          $table->unsignedBigInteger('album_id');
          $table->foreign('album_id')
                ->references('id')
                ->on('albums');
                // ->onUpdate('cascade')
                // ->onDelete('cascade')

          $table->unsignedBigInteger('tag_id');
          $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
                // ->onUpdate('cascade')
                // ->onDelete('cascade')
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_tag');
    }
}
