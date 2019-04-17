<?php namespace petervandam\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePetervandamMoviesMoviesCategories extends Migration
{
    public function up()
    {
        Schema::table('petervandam_movies_movies_categories', function($table)
        {
            $table->renameColumn('movie_id', 'movies_id');
        });
    }
    
    public function down()
    {
        Schema::table('petervandam_movies_movies_categories', function($table)
        {
            $table->renameColumn('movies_id', 'movie_id');
        });
    }
}
