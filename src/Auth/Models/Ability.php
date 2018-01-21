<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */
namespace V8CH\Combine\Auth\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use V8CH\EloquentModelTraits\CreatesUuids;

class Ability extends Model
{

    use CreatesUuids;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'actions' => 'array',
        'conditions' => 'array',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Create a new Role instance.
     *
     * @return void
     */
    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
        $this->table = config('combine-core.tablePrefix', 'combine') . '_abilities';
    }

    /**
     * Get the conditions
     *
     * @return array
     * @throws Exception
     */
//    public function getConditionsAttribute($value)
//    {
//        if ($this->subject === null) {
//            return null;
//        }
//        $user = request()->user();
//        switch ($this->subject) {
//            case Member::class:
//                return collect(json_decode($value))->reduce(function($accumulator, $key) use ($user) {
//                    $accumulator[$key] = $user->selected_context->{$key};
//                    return $accumulator;
//                }, []);
//            default:
//                throw new Exception('Invalid subject.');
//        }
//    }

}
