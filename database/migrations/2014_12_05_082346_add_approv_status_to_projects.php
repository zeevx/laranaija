<?php

use Illuminate\Database\Migrations\Migration;

class AddApprovStatusToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('projects', function ($table) {
            $table->integer('approval_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('projects', function ($table) {
            $table->dropColumn('approval_status');
        });
    }
}
