<?php namespace petervandam\Movies\Models;

use Model;

/**
 * Model
 */
class Categories extends Model
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
    public $table = 'petervandam_movies_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    public $belongsToMany = [
        'movies' => [
            'petervandam\Movies\Models\Movies',
            'table' => 'petervandam_movies_movies_categories',
            'order' => 'name'
        ]
    ];
}
