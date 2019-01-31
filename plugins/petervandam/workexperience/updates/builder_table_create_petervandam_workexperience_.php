<?php namespace PeterVanDam\Workexperience\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePetervandamWorkexperience extends Migration
{
    public function up()
    {
        Schema::create('petervandam_workexperience_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('company', 255);
            $table->string('startyear', 12);
            $table->string('endyear');
            $table->string('location', 255);
            $table->string('url', 255);
            $table->string('subtitle', 255);
            $table->text('experience');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('petervandam_workexperience_');
    }
}
