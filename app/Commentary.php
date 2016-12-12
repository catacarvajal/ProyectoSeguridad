<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentary extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'commentary';

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
    protected $fillable = ['id_pokemon','id_user', 'commentary'];

    public function getUser()
    {
        return $this->belongsTo('App\User', 'id', 'id_user');
    }
}
