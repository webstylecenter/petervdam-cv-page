<?php namespace petervandam\Movies\Models;

use Model;

/**
 * Model
 */
class Movies extends Model
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
    public $table = 'petervandam_movies_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'categories' => [
            'petervandam\Movies\Models\Categories',
            'table' => 'petervandam_movies_movies_categories',
            'order' => 'name'
        ]
    ];
}
