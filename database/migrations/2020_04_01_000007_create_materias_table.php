<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'materias';

    /**
     * Run the migrations.
     * @table materias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('crn');
            $table->string('clave', 45)->nullable();
            $table->string('materia', 45)->nullable();
            $table->integer('carreras_id')->unsigned();
            $table->integer('academias_id')->unsigned();

            $table->index(["carreras_id"], 'fk_materias_carreras1_idx');

            $table->index(["academias_id"], 'fk_materias_academias1_idx');


            $table->foreign('carreras_id', 'fk_materias_carreras1_idx')
                ->references('id')->on('carreras')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('academias_id', 'fk_materias_academias1_idx')
                ->references('id')->on('academias')
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
