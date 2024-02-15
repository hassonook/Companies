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
            $table->text('first_name');
            $table->text('second_name');
            $table->text('third_name');
            $table->text('last_name');
            $table->text('first_name_ar');
            $table->text('second_name_ar');
            $table->text('third_name_ar');
            $table->text('last_name_ar');
            $table->text('gender');
            $table->text('emp_photo')->nullable();
            $table->unsignedBigInteger('nationality_id');
            $table->unsignedBigInteger('martial_status_id')->nullable();
            $table->unsignedBigInteger('education_level_id')->nullable();
            $table->unsignedBigInteger('profession_id')->nullable();
            $table->text('certificate')->nullable();
            $table->text('resume')->nullable();
            $table->unsignedBigInteger('approval_id')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->text('email')->nullable();
            $table->text('mobile1');
            $table->text('mobile2')->nullable();
            $table->text('whatsapp')->nullable();
            $table->text('address')->nullable();
            $table->date('birth_date');
            $table->date('hire_date')->nullable();
            $table->text('passport_no');
            $table->date('pass_issue_date');
            $table->date('pass_expire_date');
            $table->text('pass_photo')->nullable();
            $table->text('visa_no')->nullable();
            $table->date('visa_issue_date')->nullable();
            $table->date('visa_expire_date')->nullable();
            $table->text('visa_photo')->nullable();
            $table->text('qid_no')->nullable();
            $table->date('qid_issue_date')->nullable();
            $table->date('qid_expire_date')->nullable();
            $table->text('qid_photo')->nullable();
            $table->text('contract')->nullable();
            $table->text('salary')->nullable();
            $table->text('bank_name')->nullable();;
            $table->text('bank_account')->nullable();
            $table->unsignedBigInteger('employee_statuses_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('approval_id')->references('id')->on('approvals')->onDelete('cascade');
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');
            $table->foreign('martial_status_id')->references('id')->on('martial_statuses')->onDelete('set null');
            $table->foreign('education_level_id')->references('id')->on('education_levels')->onDelete('set null');
            $table->foreign('profession_id')->references('id')->on('professions')->onDelete('set null');
            $table->foreign('job_title_id')->references('id')->on('job_titles')->onDelete('set null');
            $table->foreign('employee_statuses_id')->references('id')->on('employee_statuses')->onDelete('set null');
            
            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('modified_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('deleted_by')->references('id')->on('users')->onDelete('set null');
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
