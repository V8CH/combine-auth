<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

namespace V8CH\Combine\Auth\Contexts;

use Exception;
use Illuminate\Database\Eloquent\Model;

abstract class Context
{
    /**
     * Eloquent Model related to this Context
     *
     * @var Model
     */
    protected $model;

    public function __get($name)
    {
        switch ($name) {
            case 'abilities':
                return $this->model->abilities;
            case 'id':
                return $this->model->id;
            case 'role':
                return $this->model->role;
            case 'team':
                return $this->model->team;
            case 'team_id':
                return $this->model->team_id;
            case 'type':
                return $this->type();
        }
        throw new Exception("Trying to get non-existent property via magic method: {$name}");
    }

    protected function hasCoachRole()
    {
        return ($this->role === 'Coach') || ($this->role === 'Captain');
    }

    protected function hasMemberRole()
    {
        return ($this->role === 'Member') || ($this->role === 'Coach') || ($this->role === 'Captain');
    }

    public function hasRole($role)
    {
        switch ($role) {
            case 'Coach':
                return $this->hasCoachRole();
            case 'Member':
                return $this->hasMemberRole();
            default:
                return $this->role === $role;
        }
    }

    public function hasTeamId($teamId)
    {
        return $this->team_id === $teamId;
    }

    public function isType($type)
    {
        return $this->type() === $type;
    }

    /**
     * Get the Model for this Context
     *
     * @return Model
     */
    public function model()
    {
        return $this->model;
    }

    /**
     * Get the type of this Context
     *
     * @return string
     */
    protected function type()
    {
        $classIdParts = explode('\\', get_class($this->model));
        return array_pop($classIdParts);
    }

}