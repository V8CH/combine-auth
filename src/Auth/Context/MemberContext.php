<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

namespace V8CH\Combine\Auth\Contexts;

use V8CH\Combine\Auth\Models\User;

class MemberContext extends Context
{

    /**
     * Create a new MemberContext instance.
     *
     * @param User $user
     * @return void
     */
    public function __construct(User $user)
    {
        $this->model = $user->members->first(function($member) use ($user) {
            return $member->id === $user->selected_context_id;
        });
    }

}