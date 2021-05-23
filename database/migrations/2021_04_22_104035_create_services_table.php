<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration{
  public function up(){
    Schema::create('services', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('transporter');
      $table->string('fromstate')->nullable(false);
      $table->string('fromcity')->nullable(false);
      $table->string('fromarea')->nullable(true);
      $table->string('tostate')->nullable(false);
      $table->string('tocity')->nullable(false);
      $table->string('toarea')->nullable(true);
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('transporter')->references('id')->on('transporters');
    });
  }
  public function down(){
    Schema::dropIfExists('services');
  }
}
