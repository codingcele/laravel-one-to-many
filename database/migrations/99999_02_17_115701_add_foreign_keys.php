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
        Schema::table('posts', function (Blueprint $table) {

            /* $table -> bigInteger('person_id') -> unsigned();

            $table  -> foreign('person_id')
                    -> references('id')
                    -> on('people'); */
            
            $table  -> foreignId('person_id') 
                    -> constrained();

        });

        Schema::table('person_details', function (Blueprint $table) {

            /* $table -> bigInteger('person_id') -> unsigned();

            $table  -> foreign('person_id')
                    -> references('id')
                    -> on('people'); */
            
            $table  -> foreignId('person_id') 
                    -> constrained();

            $table  -> primary('person_id');

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {

            $table -> dropForeign('posts_person_id_foreign');
            $table -> dropColumn('person_id');

        });

        Schema::table('person_details', function (Blueprint $table) {

            $table -> dropForeign('person_details_person_id_foreign');
            $table -> dropColumn('person_id');

        });
    }
};
