<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountOppositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_opposition', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('account_id')->unsigned();
			$table->foreign('account_id')
				->references('id')
				->on('accounts')
				->onDelete('restrict')
                ->onUpdate('restrict');

            $table->bigInteger('opposition_id')->unsigned();
            $table->foreign('opposition_id')
                ->references('id')
                ->on('oppositions')
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
        // Schema::dropIfExists('account_opposition');
        Schema::table('account_opposition', function ($table) {
            $table->dropForeign('account_opposition_account_id_foreign');
            $table->dropForeign('account_opposition_opposition_id_foreign');
            $table->dropSoftDeletes();
        });
    }
}
