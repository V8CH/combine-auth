<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

namespace V8CH\Combine\Auth\Database;

use Illuminate\Support\Collection;
use V8CH\Combine\Auth\Models\Ability;

trait PopulatesAbilities
{

    protected function createAbility($attributes)
    {
        return factory(Ability::class)->create($attributes);
    }

    protected function populateAbilities($abilities, Collection $roleModels)
    {
        $roleModelsByName = $roleModels->keyBy('name');
        collect($abilities)->each(function ($ability) use ($roleModelsByName) {
            $attributes = [
                'actions' => $ability['actions'],
                'role_id' => $roleModelsByName->get($ability['roleName'])->id,
            ];
            if (array_key_exists('conditions', $ability)) {
                $attributes['conditions'] = $ability['conditions'];
            }
            if (array_key_exists('subject', $ability)) {
                $attributes['subject'] = $ability['subject'];
            }
            $this->createAbility($attributes);
        });
    }
}
