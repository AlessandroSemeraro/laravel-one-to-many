<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //prendo tabella
            $table->unsignedBigInteger('type_id')->after('id'); 
            //creo colonna type_id e la posiziono dopo id nella tab dip
            $table->foreign('type_id')->references('id')->on('types'); 
            //creo vincolo foreign key e faccio riferimento alla colonna type_id che fa riferimento alla colonna 'id' della tabella 'types'

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_type_id_foreign');
            $table->dropColumn('type_id'); //droppo colonna
        });
    }
};
