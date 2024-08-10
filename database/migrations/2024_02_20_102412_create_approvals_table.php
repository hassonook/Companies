<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('approvals', function (Blueprint $table) {
            $table->id();
            $table->string('vp_no');
            $table->string('req_no');
            $table->date('issue_date');
            $table->date('expire_date');
            $table->string('gender');
            $table->unsignedBigInteger('company_id');
            $table->string('nationality_id', 2);
            $table->unsignedBigInteger('job_title_id');
            $table->unsignedInteger('total');
            $table->unsignedInteger('consumed');
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('nationality_id')->references('country_code')->on('countries');
            $table->foreign('job_title_id')->references('id')->on('job_titles');

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('modified_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvals');
    }
};
