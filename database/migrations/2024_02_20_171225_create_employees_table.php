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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('last_name');
            $table->string('first_name_ar');
            $table->string('second_name_ar');
            $table->string('third_name_ar');
            $table->string('last_name_ar');
            $table->string('gender');
            $table->string('emp_photo')->nullable();
            $table->string('nationality_id', 2)->nullable();
            $table->unsignedBigInteger('martial_status_id')->nullable();
            $table->unsignedBigInteger('education_level_id')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->string('certificate')->nullable();
            $table->string('resume')->nullable();
            $table->unsignedBigInteger('approval_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile1')->nullable();
            $table->string('mobile2')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('address')->nullable();
            $table->date('birth_date');
            $table->date('hire_date')->nullable();
            $table->string('passport_no')->nullable();
            $table->date('pass_issue_date')->nullable();
            $table->date('pass_expire_date')->nullable();
            $table->string('pass_photo')->nullable();
            $table->string('visa_no')->nullable();
            $table->date('visa_issue_date')->nullable();
            $table->date('visa_expire_date')->nullable();
            $table->string('visa_photo')->nullable();
            $table->string('qid_no')->nullable();
            $table->date('qid_issue_date')->nullable();
            $table->date('qid_expire_date')->nullable();
            $table->string('qid_photo')->nullable();
            $table->string('contract')->nullable();
            $table->string('salary')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account')->nullable();
            $table->unsignedBigInteger('employee_status_id')->nullable();
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('approval_id')->references('id')->on('approvals');
            $table->foreign('nationality_id')->references('country_code')->on('countries');
            $table->foreign('martial_status_id')->references('id')->on('martial_statuses');
            $table->foreign('education_level_id')->references('id')->on('education_levels');
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->foreign('job_title_id')->references('id')->on('job_titles');
            $table->foreign('employee_status_id')->references('id')->on('employee_statuses');

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
        Schema::dropIfExists('employees');
    }
};
