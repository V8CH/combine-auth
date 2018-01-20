<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\Combine\Auth\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use V8CH\EloquentModelTraits\CreatesUuids;

/** @noinspection PhpInconsistentReturnPointsInspection */

/** @noinspection PhpInconsistentReturnPointsInspection */
class User extends Authenticatable
{

    use CreatesUuids, HasApiTokens, Notifiable, SoftDeletes;

    /**
     * Model defaults.
     *
     * @var array
     */
    protected $attributes = [
        'role' => 'User',
        'status' => 'Invited',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['settings'];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
