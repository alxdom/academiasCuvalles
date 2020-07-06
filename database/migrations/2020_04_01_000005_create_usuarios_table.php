<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('email', 50);
            $table->string('codigo', 20);
            $table->string('contraseña', 150);
            $table->string('tel', 45);
            $table->string('foto', 150)->nullable();
            $table->string('modulo', 45);
            $table->integer('cargos_id')->unsigned()->nullable();

            $table->index(["cargos_id"], 'fk_usuarios_cargos1_idx');


            $table->foreign('cargos_id', 'fk_usuarios_cargos1_idx')
                ->references('id')->on('cargos')
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
