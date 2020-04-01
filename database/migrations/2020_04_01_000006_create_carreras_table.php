<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrerasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'carreras';

    /**
     * Run the migrations.
     * @table carreras
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('carreras', 45)->nullable();
            $table->integer('departamento_id')->unsigned();

            $table->index(["departamento_id"], 'fk_carreras_departamento1_idx');


            $table->foreign('departamento_id', 'fk_carreras_departamento1_idx')
                ->references('id')->on('departamentos')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
