<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCombineRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // --------------------------------
        // Table: addresses
        // --------------------------------
        Schema::create(config('combine-core.tablePrefix', 'combine') . '_roles', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('type');
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
        Schema::dropIfExists(config('combine-core.tablePrefix', 'combine') . '_roles');
    }
}
