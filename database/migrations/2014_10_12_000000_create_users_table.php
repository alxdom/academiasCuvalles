<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

            $table->string('codigo', 20)->unique();
            $table->string('tel', 45);
            $table->string('foto', 150)->nullable();
            $table->string('modulo', 45)->nullable();
            $table->integer('cargos_id')->unsigned();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->index(["cargos_id"], 'fk_users_cargos1_idx');


            $table->foreign('cargos_id', 'fk_users_cargos1_idx')
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
        Schema::dropIfExists('users');
    }
}
