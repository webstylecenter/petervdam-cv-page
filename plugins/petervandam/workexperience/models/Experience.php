<?php namespace PeterVanDam\Workexperience\Models;

use Model;

/**
 * Model
 */
class Experience extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'petervandam_workexperience_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
