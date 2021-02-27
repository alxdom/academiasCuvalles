<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'asignaturas';

    /**
     * Run the migrations.
     * @table asignaturas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            // $table->integer('materias_crn')->unsigned();
            // $table->integer('ciclos_id')->unsigned();
            // $table->integer('usuarios_id')->unsigned();

            // $table->index(["materias_crn"], 'fk_Asignaturas_materias1_idx');

            // $table->index(["usuarios_id"], 'fk_asignaturas_usuarios1_idx');

            // $table->index(["ciclos_id"], 'fk_Asignaturas_ciclos1_idx');


            // $table->foreign('materias_crn', 'fk_Asignaturas_materias1_idx')
            //     ->references('crn')->on('materias')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');

            // $table->foreign('ciclos_id', 'fk_Asignaturas_ciclos1_idx')
            //     ->references('id')->on('ciclos')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');

            // $table->foreign('usuarios_id', 'fk_asignaturas_usuarios1_idx')
            //     ->references('id')->on('usuarios')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
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
