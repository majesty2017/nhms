<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('report_type')->nullable();
            $table->string('document_type')->nullable();
            $table->string('file_name')->nullable();
            $table->integer('prescription_id')->nullable();
            $table->longText('description')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('diagnosis_reports');
    }
}
