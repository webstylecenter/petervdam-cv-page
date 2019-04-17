<?php namespace petervandam\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePetervandamMoviesMoviesCategories2 extends Migration
{
    public function up()
    {
        Schema::table('petervandam_movies_movies_categories', function($table)
        {
            $table->renameColumn('category_id', 'categories_id');
        });
    }
    
    public function down()
    {
        Schema::table('petervandam_movies_movies_categories', function($table)
        {
            $table->renameColumn('categories_id', 'category_id');
        });
    }
}
