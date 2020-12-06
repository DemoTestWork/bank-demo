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
            $table->id();
            $table->enum('civility', ['M', 'Mme', 'Mlle'])->default('M');
            $table->string('name');
            $table->string('firstname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->unique();
            $table->string('phone_prefix')->default('212');
            $table->string('phone_operator');
            $table->string('login')->unique();
            $table->string('password');
            $table->boolean('status')->default(false);
            $table->rememberToken();
            // $table->integer('country_id')->unsigned();
            // $table->foreign('country_id')
			// 	  ->references('id')
			// 	  ->on('countries')
			// 	  ->onDelete('restrict')
            //    ->onUpdate('restrict');
            // $table->integer('operator_id')->unsigned();
            // $table->foreign('operator_id')
			// 	  ->references('id')
			// 	  ->on('operators')
			// 	  ->onDelete('restrict')
            //    ->onUpdate('restrict');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('users');
        Schema::table("users", function ($table) {
            // $table->dropForeign('users_country_id_foreign');
            // $table->dropForeign('users_operator_id_foreign');
            $table->dropSoftDeletes();
        });
    }
}
