<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilSeeder extends Seeder
{
    /**
     * 
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil')->insert([
        	[
	        	'nro_doc' => 72251488,
                'nombres' => 'Gamarra Solis',
	        	'ap_paterno' => 'Suarez',
	        	'ap_materno' => 'Lino',
	        	'direccion' => 'Jr. Manuel Ruíz 230',
	        	'celular' => 952312435,
	        	'correo' => 'gamarra@gmail.com',
	        	'fecha_nacimiento' => '1995-05-02'
        	],
        	[
	        	'nro_doc' => 12345678,
                'nombres' => 'Jesus',
	        	'ap_paterno' => 'Lopez',
	        	'ap_materno' => 'Huaman',
	        	'direccion' => 'Jr. Caminos Ruíz 230',
	        	'celular' => 369857459,
	        	'correo' => 'lopez@gmail.com',
	        	'fecha_nacimiento' => '1987-12-01'
        	],
        	[
	        	'nro_doc' => 12378952,
                'nombres' => 'Luis Miguel',
	        	'ap_paterno' => 'Rivas',
	        	'ap_materno' => 'Alvarez',
	        	'direccion' => 'Jr. Manuel 20',
	        	'celular' => 852741963,
	        	'correo' => 'luis@gmail.com',
	        	'fecha_nacimiento' => '1997-01-18'
        	],
        	[
        		'nro_doc' => 98752148,
                'nombres' => 'Gustavo',
	        	'ap_paterno' => 'Alfonso',
	        	'ap_materno' => 'Martinez',
	        	'direccion' => 'Avenida 12 230',
	        	'celular' => 987542877,
	        	'correo' => 'gustavo@gmail.com',
	        	'fecha_nacimiento' => '1987-08-09'
        	],
        	[
        		'nro_doc' => 96385274,
                'nombres' => 'Juana',
	        	'ap_paterno' => 'Miram',
	        	'ap_materno' => 'Nando',
	        	'direccion' => 'Jr. Ruíz 230',
	        	'celular' => 258741963,
	        	'correo' => 'juana@gmail.com',
	        	'fecha_nacimiento' => '1985-05-10'
        	],
        	[
        		'nro_doc' => 14785296,
                'nombres' => 'Maria',
	        	'ap_paterno' => 'Pilar',
	        	'ap_materno' => 'Cuadros',
	        	'direccion' => 'Jr. Surco 12',
	        	'celular' => 123456789,
	        	'correo' => 'mariaa@gmail.com',
	        	'fecha_nacimiento' => '1991-11-11'
        	]
        ]);
    }
}
