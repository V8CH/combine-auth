<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\Combine\Auth\Http\Transformers;

use V8CH\Combine\Auth\Models\User;
use League\Fractal\TransformerAbstract;

class AuthenticatedUserTransformer extends TransformerAbstract
{

    /**
     * Related objects available for inclusion in the the transformation
     *
     * @var array
     */
    protected $availableIncludes = [
        'abilities',
        'contextOptions',
    ];

    /**
     * Transformer to generate JSON response with authenticated User data
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'selectedContextId' => $user->selected_context_id,
            'email' => $user->email,
            'id' => $user->id,
            'name' => $user->name,
            'role' => $user->role,
            'status' => $user->status,
        ];
    }

    /**
     * Include related Member records selectable as an application context
     *
     * @return
     */
    public function includeAbilities(User $user)
    {
        $abilities = isset($user->selected_context_id) ? $user->selected_context->abilities : [];

        return $this->collection($abilities, new AbilityTransformer, 'ability');
    }

    /**
     * Include related Member records selectable as an application context
     *
     * @return
     */
    public function includeContextOptions(User $user)
    {
        $contexts = $user->members;

        return $this->collection($contexts, new ContextOptionTransformer, 'contextOption');
    }
}