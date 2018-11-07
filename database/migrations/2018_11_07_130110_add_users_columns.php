<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                ->on('users')
                ->references('id');

            $table->enum('investment_project', [
                'mostly_physcial',
                'crypto_blockchain',
                'mostly_digital'
            ]);
            $table->boolean('marco_task')->nullable();
            $table->boolean('cd_founder')->nullable();
            $table->integer('status_range_start')->nullable();
            $table->integer('status_range_end')->nullable();
            $table->text('company_name')->nullable();
            $table->text('active_industry')->nullable();
            $table->text('job_title')->nullable();
            $table->text('worked_here')->nullable();
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
        Schema::dropIfExists('user_info');
    }
}
