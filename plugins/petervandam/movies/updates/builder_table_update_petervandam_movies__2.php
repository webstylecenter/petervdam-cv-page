<?php namespace petervandam\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePetervandamMovies2 extends Migration
{
    public function up()
    {
        Schema::table('petervandam_movies_', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('petervandam_movies_', function($table)
        {
            $table->integer('sort_order')->nullable();
        });
    }
}
