<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\Combine\Auth\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Passport\HasApiTokens;
use V8CH\Combine\Auth\Contexts\MemberContext;
use V8CH\Combine\Core\Models\CreatesUuids;
use V8CH\Combine\Member\Models\Member;
use V8CH\Combine\Member\Models\MemberInvitation;

/** @noinspection PhpInconsistentReturnPointsInspection */

/** @noinspection PhpInconsistentReturnPointsInspection */
class User extends Authenticatable
{

    use CreatesUuids, HasApiTokens, Notifiable, SoftDeletes;

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['selected_context'];

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
     * The attributes that should be cast to native types.
     *
     * @var MemberContext
     */
    private $context;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['settings'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * One-to-many polymorphic relationship to Address
     *
     * @Address Address
     */
    public function addresses()
    {
        return $this->morphMany('V8CH\Combine\Shared\Models\Address', 'addressable');
    }

    /**
     * Get the available contexts for the User
     *
     * @return Collection
     */
    public function getContextsAttribute()
    {
        $this->load('members');
        return $this->members->map(function ($context) {
            $classIdParts = explode('\\', get_class($context));
            return [
                'id' => $context->id,
                'role' => $context->role,
                'status' => $context->status,
                'team_id' => $context->team_id,
                'type' => array_pop($classIdParts),
            ];
        });
    }

    /**
     * Get the selected context
     *
     * @return MemberContext
     * @throws HttpResponseException
     */
    public function getSelectedContextAttribute()
    {
        if (isset($this->context)) {
            return $this->context;
        }
        switch ($this->selected_context_type) {
            case 'Member':
                return $this->context = new MemberContext($this);
            default:
                abort(401, 'Context not selected.');
        }
    }

    /**
     * Check for existing MemberInvitation on Team with UUID
     *
     * @param [type] $teamId UUID of Team to check for User Member
     * @return boolean
     */
    public function hasMemberInvitationOnTeam($teamId)
    {
        $memberInvitationsOnTeam = $this->memberInvitations->filter(function ($memberInvitation) use ($teamId) {
            return ($memberInvitation->member->team_id === $teamId) && ($memberInvitation->member->status === "Invited");
        });
        /** @noinspection PhpUndefinedMethodInspection */
        return $memberInvitationsOnTeam->count() > 0;
    }

    /**
     * Check for existing Member on Team with UUID
     *
     * @param [type] $teamId UUID of Team to check for User Member
     * @return boolean
     */
    public function hasMemberOnTeam($teamId)
    {
        $membersOnTeam = $this->members->filter(function ($member) use ($teamId) {
            return ($member->team_id === $teamId) && ($member->status !== "Invited");
        });
        /** @noinspection PhpUndefinedMethodInspection */
        return $membersOnTeam->count() > 0;
    }

    /**
     * Has-many-through relationship to MemberInvitations
     *
     * @MemberInvitation MemberInvitation
     */
    public function memberInvitations()
    {
        return $this->hasManyThrough(MemberInvitation::class, Member::class);
    }

    /**
     * One-to-many relationship to Member
     *
     * @Member members
     */
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    /**
     * One-to-many polymorphic relationship to Phone
     *
     * @Phone Phone
     */
    public function phones()
    {
        return $this->morphMany('V8CH\Combine\Shared\Models\Phone', 'phoneable');
    }

    /**
     * One-to-Many relationship to Team
     *
     * @Team members
     */
    public function teams()
    {
        return $this->hasMany('V8CH\Combine\Core\Models\Team');
    }
}
