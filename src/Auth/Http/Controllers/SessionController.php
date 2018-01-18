<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\Combine\Auth\Http\Controllers;

use V8CH\Combine\Auth\Http\Transformers\AuthenticatedUserTransformer;
use V8CH\Combine\Core\Http\Controllers\CombineController;
use V8CH\Combine\Auth\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SessionController extends CombineController
{
    public function show(Request $request, $id)
    {
        switch ($id) {
            case 'user':
                $user = $request->user()
                    ->load(
                        'members',
                        'members.team'
                    );
                return $this->respondAuthenticatedUser($user);
            default:
                throw new NotFoundHttpException('Session object key not found');
        }
    }

    protected function respondAuthenticatedUser(User $user)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        return fractal($user, new AuthenticatedUserTransformer())
            ->includeAbilities()
            ->includeContextOptions()
            ->withResourceName('user')
            ->respond();
    }

    public function update(Request $request, $id)
    {
        if($id !== 'context') {
            throw new NotFoundHttpException('Session key not found');
        }
        $rules = [
            'contextType' => [
                'required',
                Rule::in(['Member']),
            ],
        ];
        // Validation of contextId is dependent on contextType, so just fail on contextType if it is missing
        if ($request->has('contextType')) {
            $table = config('combine-core.tablePrefix') . '_' . strtolower($request->get('contextType')) . 's';
            $rules['contextId'] = "required|exists:{$table},id";
        }
        /** @noinspection PhpUndefinedMethodInspection */
        $request->validate($rules);
        $user = $request->user();
        // selected_context_id, selected_context_type are setters, so mass assignment does not work here; must set explicitly, then save
        $user->selected_context_id = $request->contextId;
        $user->selected_context_type = $request->contextType;
        $user->save();
        $user->load('members',
            'members.team'
        );
        return $this->respondAuthenticatedUser($user);
    }
}
