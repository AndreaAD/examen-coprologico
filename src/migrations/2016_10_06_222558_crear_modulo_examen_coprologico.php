<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearModuloExamenCoprologico extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examen_coprologico', function($table){
            $table->increments('id');
            $table->integer('id_consulta')->unsigned();
            $table->string('color')->nullable();
            $table->string('consistecia')->nullable();
            $table->string('flora_bacteriana')->nullable();
            $table->string('almidones')->nullable();
            $table->string('celulas_vegetales')->nullable();
            $table->string('fibra_muscular')->nullable();
            $table->string('jabones')->nullable();
            $table->string('pelos_vegetal')->nullable();
            $table->string('fibra_vegetal')->nullable();
            $table->string('polen')->nullable();
            $table->string('leucocitos')->nullable();
            $table->string('hematies')->nullable();
            $table->string('quistes_de_entamoeba_histolytica')->nullable();
            $table->string('quistes_de_endolimax_nana')->nullable();
            $table->string('quistes_de_entamoeba_coli')->nullable();
            $table->string('quistes_de_iodamoeba_butschlii')->nullable();
            $table->string('blastocystis_hominis')->nullable();
            $table->string('coprologico_otros')->nullable();

            $table->timestamps();
        });

        if (Schema::hasTable('consultas'))
        {
            Schema::table('examen_coprologico', function($table){
                $table->foreign('id_consulta')->references('id')->on('consultas')->onDelete('cascade');
            });

        }

        if (Schema::hasTable('permissions') && Schema::hasTable('modulos'))
        {
            $id_modulo = DB::table('modulos')->insertGetId(
                ['nombre' => 'Examen Coprológico', 'icono' => 'fa-folder-o', 'descripcion' => 'Paquete para gestionar el examen coprologico de sus pacientes', 'predeterminado' => 0, 'valor'  =>10000]
            );

            DB::table('permissions')->insert([
                ['name' => 'gestionar_examen_coprologico', 'display_name' => 'Examen Coprológico', 'id_modulo' => $id_modulo]
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('permissions') && Schema::hasTable('modulos'))
        {
            DB::table('permissions')->where('name', '=', 'gestionar_examen_coprologico')->delete();
            DB::table('modulos')->where('nombre', '=', 'Examen Coprológico')->delete();
        }

        if (Schema::hasTable('consultas'))
        {
            Schema::table('examen_coprologico', function(Blueprint $table){
                $table->dropForeign('examen_coprologico_id_consulta_foreign');
            });

        }

        Schema::drop('examen_coprologico');
    }

}
