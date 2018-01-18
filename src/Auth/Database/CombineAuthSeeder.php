<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

namespace V8CH\Combine\Auth\Database;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use V8CH\Combine\Member\Models\Member;
use V8CH\Combine\Auth\Models\User;

class CombineAuthSeeder extends Seeder
{

    use PopulatesAbilities, PopulatesRoles;

    protected $abilities = [
        [
            'actions' => ['member-manage-self'],
            'conditions' => ['id'],
            'roleName' => 'Member',
            'subject' => Member::class,
        ],
        [
            'actions' => ['member-manage-team'],
            'roleName' => 'Coach',
        ],
    ];

    protected $roles = [
        [
            'name' => 'Captain',
            'type' => Member::class,
        ],
        [
            'name' => 'Coach',
            'type' => Member::class,
        ],
        [
            'name' => 'Member',
            'type' => Member::class,
        ],
        [
            'name' => 'User',
            'type' => User::class,
        ],
    ];

    protected $roleModels;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!App::environment('testing')) {
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }
        DB::table(config('combine-core.tablePrefix', 'combine') . '_abilities')->truncate();
        DB::table(config('combine-core.tablePrefix', 'combine') . '_roles')->truncate();
        DB::table('users')->truncate();
        if (!App::environment('testing')) {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }

        echo "Populating Roles ...\n";
        $this->roleModels = $this->populateRoles($this->roles);
        echo "Populating Abiltiies ...\n";
        $this->populateAbilities($this->abilities, $this->roleModels);
    }
}
