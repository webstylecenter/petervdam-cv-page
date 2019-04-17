<?php namespace petervandam\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePetervandamMovies extends Migration
{
    public function up()
    {
        Schema::create('petervandam_movies_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('petervandam_movies_');
    }
}
