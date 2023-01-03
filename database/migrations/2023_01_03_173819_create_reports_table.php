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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('source')->default('REPORT');    // REPORT ,  
            $table->string('reportType');   // SPAM , VIOLATES_POLICIES, REPLY, .... 
            $table->string('message');
            $table->string('reportId')->default('d9865001-c46e-4fd5-b810-4310fa41cf3d');
            $table->string('referenceResourceId')->default('c8ba7a4b-1aa6-471b-bf91-748f915af1fb');   // id of reference resourcce id 
            $table->string('referenceResourceType')->default('POST');       // POST , ARTICLE
            $table->string('state')->default('OPEN');      // OPEN, CLOSED, RESOLVED
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
        Schema::dropIfExists('reports');
    }
};
