<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_resources', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('document_id');
            $table->bigInteger('resource_id')->index();
            $table->smallInteger('rank')->default(1)->comment('the sequence numbering of multiple uploads of the same document same resource_id');
            $table->string('resource_type', 150);
            $table->string('name', 191)->comment('Original name of the document.');
            $table->text('description')->nullable();
            $table->string('ext', 10);
            $table->decimal('size', 10, 0);
            $table->string('mime', 30);
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
        Schema::dropIfExists('document_resources');
    }
}
