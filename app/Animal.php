<?php

namespace App;

use App\Extension\Model;

/**
 * App\Animal
 *
 * @property string $name
 * @property string $group
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Animal whereName($value)
 * @mixin \Eloquent
 */
class Animal extends Model
{
    /**
     * マスアサインメントを許可する属性
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'group',
    ];
}
