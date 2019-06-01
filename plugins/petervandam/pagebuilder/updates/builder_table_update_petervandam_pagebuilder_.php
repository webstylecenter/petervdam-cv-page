<?php namespace petervandam\pagebuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePetervandamPagebuilder extends Migration
{
    public function up()
    {
        Schema::table('petervandam_pagebuilder_', function($table)
        {
            $table->text('segments')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('petervandam_pagebuilder_', function($table)
        {
            $table->dropColumn('segments');
        });
    }
}
