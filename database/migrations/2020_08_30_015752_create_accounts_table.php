<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->string('rib')->unique();
            $table->string('agency');
            $table->double('balance', 10, 2)->default(0);

            $table->bigInteger('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('restrict')
                  ->onUpdate('restrict');

            $table->bigInteger('account_type_id')->unsigned();
			$table->foreign('account_type_id')
				  ->references('id')
				  ->on('account_types')
				  ->onDelete('restrict')
                  ->onUpdate('restrict');
                  
            $table->bigInteger('currency_id')->unsigned();
            $table->foreign('currency_id')
                ->references('id')
                ->on('currencies')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->boolean('status')->default(true);
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
        // Schema::dropIfExists('accounts');
        Schema::table('accounts', function ($table) {
            $table->dropForeign('accounts_user_id_foreign');
            $table->dropForeign('accounts_account_type_id_foreign');
            $table->dropForeign('accounts_currency_id_foreign');
            $table->dropSoftDeletes();
        });
    }
}
