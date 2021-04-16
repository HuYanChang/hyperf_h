<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property $id
 * @property $username
 * @property $nickname
 * @property $mobile
 * @property $create_time
 * @property $birthday
 * @property $create_at
 * @property $update_at
 * @property $gender
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';
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
    protected $casts = ['id' => 'integer', 'sex' => 'integer'];

    protected $primaryKey = 'id';
}