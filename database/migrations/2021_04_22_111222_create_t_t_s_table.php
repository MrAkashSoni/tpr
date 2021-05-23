<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTSTable extends Migration{
  public function up()
  {
    Schema::create('t_t_s', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('transporter');
      $table->unsignedBigInteger('truck');
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('transporter')->references('id')->on('transporters');
      $table->foreign('truck')->references('id')->on('trucks');
    });
  }
  public function down(){
    Schema::dropIfExists('t_t_s');
  }
}
