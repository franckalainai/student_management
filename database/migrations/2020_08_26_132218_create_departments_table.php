<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('department_id');
            $table->unsignedInteger('faculty_id')->nullable();
            $table->string('department_name');
            $table->string('department_code')->unique();
            $table->longText('department_description');
            $table->tinyInteger('department_status')->default(1);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('set null');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
