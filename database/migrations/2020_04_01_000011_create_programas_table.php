<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'programas';

    /**
     * Run the migrations.
     * @table programas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('programa', 45)->nullable();
            $table->integer('Asignaturas_id')->unsigned();

            $table->index(["Asignaturas_id"], 'fk_programas_Asignaturas1_idx');


            $table->foreign('Asignaturas_id', 'fk_programas_Asignaturas1_idx')
                ->references('id')->on('asignaturas')
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
