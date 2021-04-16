<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property $id
 * @property $type
 */
class UserAuth extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_auth';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
}