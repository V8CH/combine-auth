<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCombineAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // --------------------------------
        // Table: abilities
        // --------------------------------
        Schema::create(config('combine-core.tablePrefix', 'combine') . '_abilities', function (Blueprint $table) {
            $table->uuid('id');
            $table->json('actions');
            $table->json('conditions')->nullable();
            $table->string('role_id');
            $table->string('subject')->nullable();
            // --------------------------------
            // Foreign Keys
            // --------------------------------
            $table->foreign('role_id')->references('id')->on(config('combine-core.tablePrefix', 'combine') . '_roles');
            // --------------------------------
            // Indexes
            // --------------------------------
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('combine-core.tablePrefix', 'combine') . '_abilities');
    }
}
