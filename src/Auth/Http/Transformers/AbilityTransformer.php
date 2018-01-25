<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\LaravelAuthApi\Http\Transformers;

use League\Fractal\TransformerAbstract;
use V8CH\LaravelAuthApi\Models\Ability;

class AbilityTransformer extends TransformerAbstract
{

    /**
     * Transformer to generate JSON response with Ability data
     *
     * @param \V8CH\Combine\Models\Ability
     * @return array
     */
    public function transform(Ability $ability)
    {
        return [
            'actions' => $ability->actions,
            'conditions' => $ability->conditions,
            'id' => $ability->id,
        ];
    }
}