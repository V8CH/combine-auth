<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\LaravelAuthApi\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use V8CH\Combine\Core\Models\Traits\HasMemberContext;
use V8CH\Combine\Core\Models\Traits\HasTeams;
use V8CH\Combine\Core\Models\Traits\HasMembers;
use V8CH\Combine\Shared\Models\Traits\HasAddresses;
use V8CH\Combine\Shared\Models\Traits\HasPhones;
use V8CH\EloquentModelTraits\CreatesUuids;

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
        'status' => 'Onboarded',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
