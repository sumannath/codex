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
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('storage_account_id')->constrained();

            $table->smallInteger('file_type_id')->unsigned();
            $table->foreign('file_type_id')->references('id')->on('file_types');

            $table->bigInteger('parent_file_id')->nullable()->unsigned();
            $table->foreign('parent_file_id')->references('id')->on('files');

            $table->string('name');
            $table->bigInteger('size')->unsigned();
            $table->text('description');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
};
