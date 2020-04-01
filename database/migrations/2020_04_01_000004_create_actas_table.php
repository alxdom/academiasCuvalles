<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'actas';

    /**
     * Run the migrations.
     * @table actas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('acta', 45)->nullable();
            $table->integer('academias_id')->unsigned();

            $table->index(["academias_id"], 'fk_actas_academias1_idx');


            $table->foreign('academias_id', 'fk_actas_academias1_idx')
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
