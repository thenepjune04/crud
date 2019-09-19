<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newbuffet extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'newbuffets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['NameBuffe', 'position', 'price'];

    
}
