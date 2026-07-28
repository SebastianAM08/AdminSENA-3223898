<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetCascadeAllRelations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Teachers: area_id, training_center_id -> cascade
        Schema::table('teachers', function (Blueprint $table) {
            try {
                $table->dropForeign(['area_id']);
            } catch (\Exception $e) {}
            try {
                $table->dropForeign(['training_center_id']);
            } catch (\Exception $e) {}

            $table->foreign('area_id')
                ->references('id')->on('areas')
                ->onDelete('cascade');

            $table->foreign('training_center_id')
                ->references('id')->on('training_centers')
                ->onDelete('cascade');
        });

        // Courses: training_center_id -> cascade (area_id handled by previous migration)
        Schema::table('courses', function (Blueprint $table) {
            try {
                $table->dropForeign(['training_center_id']);
            } catch (\Exception $e) {}

            $table->foreign('training_center_id')
                ->references('id')->on('training_centers')
                ->onDelete('cascade');
        });

        // Apprentices: course_id, computer_id -> cascade
        Schema::table('apprentices', function (Blueprint $table) {
            try {
                $table->dropForeign(['course_id']);
            } catch (\Exception $e) {}
            try {
                $table->dropForeign(['computer_id']);
            } catch (\Exception $e) {}

            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('cascade');

            $table->foreign('computer_id')
                ->references('id')->on('computers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teachers', function (Blueprint $table) {
            try { $table->dropForeign(['area_id']); } catch (\Exception $e) {}
            try { $table->dropForeign(['training_center_id']); } catch (\Exception $e) {}

            $table->foreign('area_id')
                ->references('id')->on('areas')
                ->onDelete('set null');

            $table->foreign('training_center_id')
                ->references('id')->on('training_centers')
                ->onDelete('set null');
        });

        Schema::table('courses', function (Blueprint $table) {
            try { $table->dropForeign(['training_center_id']); } catch (\Exception $e) {}

            $table->foreign('training_center_id')
                ->references('id')->on('training_centers')
                ->onDelete('set null');
        });

        Schema::table('apprentices', function (Blueprint $table) {
            try { $table->dropForeign(['course_id']); } catch (\Exception $e) {}
            try { $table->dropForeign(['computer_id']); } catch (\Exception $e) {}

            $table->foreign('course_id')
                ->references('id')->on('courses')
                ->onDelete('set null');

            $table->foreign('computer_id')
                ->references('id')->on('computers')
                ->onDelete('set null');
        });
    }
}
