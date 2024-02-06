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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('company_name');
            $table->text('company_name_ar');
            $table->text('company_logo')->nullable();
            $table->text('owner_id');
            $table->text('owner_phone');
            $table->text('registration_id');
            $table->date('reg_issue_date');
            $table->date('reg_expire_date');
            $table->text('reg_photo');
            $table->text('commercial_id');
            $table->date('com_issue_date');
            $table->date('com_expire_date');
            $table->text('com_photo');
            $table->text('license_no');
            $table->date('lic_issue_date');
            $table->date('lic_expire_date');
            $table->text('lic_photo');
            $table->text('main_branch');
            $table->text('business');
            $table->text('company_address');
            $table->text('telephone')->nullable();
            $table->text('email')->nullable();
            $table->text('website')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('companies');
    }
};
