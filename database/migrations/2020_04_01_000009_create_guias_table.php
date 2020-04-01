<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'guias';

    /**
     * Run the migrations.
     * @table guias
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('guia', 45)->nullable();
            $table->integer('asignaturas_id')->unsigned();

            $table->index(["asignaturas_id"], 'fk_guias_asignaturas1_idx');


            $table->foreign('asignaturas_id', 'fk_guias_asignaturas1_idx')
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
