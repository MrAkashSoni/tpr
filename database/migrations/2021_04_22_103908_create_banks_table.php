<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration{
  public function up(){
    Schema::create('banks', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('transporter');
      $table->string('name')->nullable(false);
      $table->string('holdername')->nullable(false);
      $table->bigInteger('accountnumber')->nullable(false);
      $table->string('ifsccode')->nullable(false);
      $table->string('branch')->nullable(true);
      $table->string('upiaddress')->nullable(true);
      $table->bigInteger('mmid')->nullable(true);
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('transporter')->references('id')->on('transporters');
    });
  }
  public function down(){
    Schema::dropIfExists('banks');
  }
}
