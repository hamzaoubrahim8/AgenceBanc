<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChageComlumnTypeEVersementsMontant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
        DB::statement('ALTER TABLE e_versements MODIFY montant DOUBLE(8,2)  ;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('e_versements', function (Blueprint $table) {
            //
        });
    }
}