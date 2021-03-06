<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelUser extends Model
{
    use SoftDeletes;

	protected $table = 'users';

	protected $dates = ['deleted_at'];

    protected $fillable = ['firstname', 'lastname', 'email', 'birthdate', 'gender', 'photo_profile', 'password', 'type', 'created_at', 'deleted_at'];
	

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'deleted_at',
    ];

}
