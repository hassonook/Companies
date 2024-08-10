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
            $table->string('company_name');
            $table->string('company_name_ar');
            $table->string('company_logo')->nullable();
            $table->string('owner_id');
            $table->string('owner_phone');
            $table->string('registration_id');
            $table->date('reg_issue_date');
            $table->date('reg_expire_date');
            $table->string('reg_photo');
            $table->string('commercial_id');
            $table->date('com_issue_date');
            $table->date('com_expire_date');
            $table->string('com_photo');
            $table->string('license_no');
            $table->date('lic_issue_date');
            $table->date('lic_expire_date');
            $table->string('lic_photo');
            $table->string('main_branch');
            $table->string('business');
            $table->string('company_address');
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->text('remarks')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('modified_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('companies');
    }
};
