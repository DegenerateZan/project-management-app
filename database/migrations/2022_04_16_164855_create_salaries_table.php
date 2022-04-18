<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('developer_id');
            $table->decimal('basic_salary');
            $table->decimal('total_salary_received');
            $table->decimal('payroll_status');
            $table->date('payroll_date');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
};
