<?php

namespace App\Extension;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * App\Extension\Model
 *
 * @mixin \Eloquent
 */
class Model extends BaseModel
{
    /**
     * timestampを更新するか
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * インクリメント
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * プライマリーキー
     *
     * @var string
     */
    protected $primaryKey = 'name';
}
