<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration{
  public function up(){
    Schema::create('regions', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('state')->nullable(false);
      $table->string('city')->nullable(false);
    });
  }
  public function down(){
    Schema::dropIfExists('regions');
  }
}
