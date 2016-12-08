<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
         /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pokemon';

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
    protected $fillable = ['before_evo','name','type_first','type_second'];

}
