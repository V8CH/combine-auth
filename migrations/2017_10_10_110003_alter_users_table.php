<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2017
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // --------------------------------
        // Table: users
        // --------------------------------
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');
            $table->rememberToken();
            $table->string('role');
            $table->uuid('selected_context_id')->nullable();
            $table->string('selected_context_type')->nullable();
            $table->string('status');
            // --------------------------------
            // Timestamps
            // --------------------------------
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
}
