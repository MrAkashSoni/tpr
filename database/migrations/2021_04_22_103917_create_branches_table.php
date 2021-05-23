<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration{
  public function up(){
    Schema::create('branches', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('transporter');
      $table->string('name')->nullable(false);
      $table->string('handlername')->nullable(false);
      $table->string('email')->nullable(false);
      $table->bigInteger('whatsappnumber')->nullable(false);
      $table->bigInteger('contactnumber')->nullable(false);
      $table->string('address')->nullable(false);
      $table->string('state')->nullable(false);
      $table->string('city')->nullable(false);
      $table->string('area')->nullable(true);
      $table->Integer('zipcode')->nullable(false);
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('transporter')->references('id')->on('transporters');
    });
  }
  public function down(){
    Schema::dropIfExists('branches');
  }
}
