<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenciasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'evidencias';

    /**
     * Run the migrations.
     * @table evidencias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('tareas', 45)->nullable();
            $table->string('examenes', 45)->nullable();
            $table->string('calificaciones', 45)->nullable();
            $table->string('siiau', 45)->nullable();
            $table->string('autoevaluacion', 45)->nullable();
            $table->integer('Asignaturas_id')->unsigned();

            $table->index(["Asignaturas_id"], 'fk_evidencias_Asignaturas1_idx');


            $table->foreign('Asignaturas_id', 'fk_evidencias_Asignaturas1_idx')
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
