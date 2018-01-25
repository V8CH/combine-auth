<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\LaravelAuthApi\Http\Transformers;

use League\Fractal\TransformerAbstract;

class ContextOptionTransformer extends TransformerAbstract
{

    /**
     * Transformer to generate JSON response with Member data used as team app context
     *
     * @param \V8CH\Combine\Member\Models\Member
     * @return array
     */
    public function transform($context)
    {
        $classIdParts = explode('\\', get_class($context));
        $option = [
            'id' => $context->id,
            'teamId' => $context->team->id,
            'teamName' => $context->team->name,
            'contextType' => array_pop($classIdParts),
            'role' => $context->role,
            'status' => $context->status,
        ];
        return $option;
    }
}