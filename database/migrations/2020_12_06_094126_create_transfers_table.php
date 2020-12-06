<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('restrict')
                ->onUpdate('restrict');

            $table->bigInteger('account_id')->unsigned();
			$table->foreign('account_id')
				->references('id')
				->on('accounts')
				->onDelete('restrict')
                ->onUpdate('restrict');

            $table->bigInteger('beneficiary_id')->unsigned();
			$table->foreign('beneficiary_id')
				->references('id')
				->on('beneficiaries')
				->onDelete('restrict')
                ->onUpdate('restrict');

            $table->double('amount', 10, 2)->default(0);

            $table->boolean('permanent_order')->default(false);
            $table->date('permanent_first_date')->nullable();

            $table->string('pattern')->nullable();

            $table->boolean('status')->default(false);
            $table->ipAddress('request_ip')->nullable();

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
        // Schema::dropIfExists('transfers');
        Schema::table('transfers', function ($table) {
            $table->dropForeign('transfers_user_id_foreign');
            $table->dropForeign('transfers_account_id_foreign');
            $table->dropForeign('transfers_beneficiary_id_foreign');
            $table->dropSoftDeletes();
        });
    }
}
