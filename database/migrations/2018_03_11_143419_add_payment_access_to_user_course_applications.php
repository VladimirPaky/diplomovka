<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentAccessToUserCourseApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_course_applications', function (Blueprint $table) {
            //
            $table->boolean('payment')->default(false)->after('course_id');
            $table->boolean('access')->default(false)->after('payment');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_course_applications', function (Blueprint $table) {
            //

            $table->dropColumn('payment');
            $table->dropColumn('access');
        });
    }
}
