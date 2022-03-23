<?php

use App\Models\UserDomicilio;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user_domicilio = new UserDomicilio();
        Schema::create($user_domicilio->getTable(), function (Blueprint $table) {
            $user_domicilio = new UserDomicilio();
            $table->id($user_domicilio->getKeyName());
            $table->foreignId('user_id')
                ->references('id_user')
                ->on('users')
                ->onUpdate('cascade');
            $table->string('domicilio')->default('Sin dato');
            $table->string('numero_exterior', 10)->default('S/N');
            $table->string('colonia')->default('Sin dato');
            $table->string('cp', 5)->default('N/A');
            $table->string('ciudad')->default('Sin dato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_domicilios');
    }
}
