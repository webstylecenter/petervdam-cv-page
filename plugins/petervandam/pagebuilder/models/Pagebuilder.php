<?php namespace petervandam\pagebuilder\Models;

use Model;

/**
 * Model
 */
class Pagebuilder extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'petervandam_pagebuilder_';

    protected $jsonable = ['segments', 'contents'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
