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
            $table->unsignedBigInteger('developer_id');
            $table->decimal('salary_amount',50);
            $table->decimal('payroll_deducation',50);
            $table->decimal('overtime_money',50);
            $table->boolean('payroll_status');
            $table->decimal('total_salary_received',50);
            $table->date('payroll_date');
            $table->foreign('developer_id')->references('id')->on('developers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.+
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
};
