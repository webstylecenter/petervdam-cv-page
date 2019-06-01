<?php namespace petervandam\pagebuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePetervandamPagebuilder extends Migration
{
    public function up()
    {
        Schema::create('petervandam_pagebuilder_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('slug');
            $table->text('title');
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('petervandam_pagebuilder_');
    }
}
