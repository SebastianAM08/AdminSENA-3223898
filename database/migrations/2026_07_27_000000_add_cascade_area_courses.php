<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadeAreaCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            // If a foreign key exists, drop it and recreate with cascade
            // Default foreign name is courses_area_id_foreign
            // Use dropForeign with column name; if it doesn't exist this will error,
            // but typical Laravel apps created the FK in the original migration.
            try {
                $table->dropForeign(['area_id']);
            } catch (\Exception $e) {
                // ignore if FK doesn't exist
            }

            $table->foreign('area_id')
                  ->references('id')
                  ->on('areas')
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
        Schema::table('courses', function (Blueprint $table) {
            try {
                $table->dropForeign(['area_id']);
            } catch (\Exception $e) {
                // ignore
            }

            $table->foreign('area_id')
                  ->references('id')
                  ->on('areas');
        });
    }
}
