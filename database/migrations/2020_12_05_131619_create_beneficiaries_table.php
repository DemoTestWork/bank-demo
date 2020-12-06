<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['physical', 'moral']);
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('social_reason')->nullable();
            $table->string('rib_prefix');
            $table->string('rib');

            $table->bigInteger('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onDelete('restrict')
                ->onUpdate('restrict');

            $table->boolean('status')->default(true);
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
        // Schema::dropIfExists('beneficiaries');
        Schema::table('beneficiaries', function ($table) {
            $table->dropForeign('beneficiaries_user_id_foreign');
            $table->dropSoftDeletes();
        });
    }
}
