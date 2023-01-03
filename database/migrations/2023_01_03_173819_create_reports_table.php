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
            $table->string('source');    // REPORT ,  
            $table->string('reportType');   // SPAM , VIOLATES_POLICIES, REPLY, .... 
            $table->string('message');
            $table->string('reportId');
            $table->string('referenceResourceId');   // id of reference resourcce id 
            $table->string('referenceResourceType');       // POST , ARTICLE
            $table->string('state');      // OPEN, CLOSED, RESOLVED
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
