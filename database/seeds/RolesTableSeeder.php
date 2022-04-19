<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$GG = Role::create(['name' => 'GERENCIA GENERAL']);
		$GG->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
			'absences.store'
		]);
		$RRHH = Role::create(['name' => 'DEPARTAMENTO NACIONAL DE RECURSOS HUMANOS']);
		$RRHH->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
			'absences.second',
			'absences.store',
			'vacations.aprobed'
		]);
		$GNCGO = Role::create(['name' => 'DEPARTAMENTO NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA']);
		$GNCGO->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.first',
			'absences.store',
			'vacations.aprobed'
		]);
		$GNC = Role::create(['name' => 'DEPARTAMENTO NACIONAL COMERCIAL']);
		$GNC->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.first',
			'absences.store',
			'vacations.aprobed'
		]);
		$GNAL = Role::create(['name' => 'DEPARTAMENTO NACIONAL DE ASESORIA LEGAL']);
		$GNAL->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.store'
        ]);

		$JNTIC = Role::create(['name' => 'TIC']);
		$JNTIC->givePermissionTo([
        	'permissions.index',
        	'permissions.store',
        	'permissions.update',
            'permissions.destroy',

        	'roles.index',
        	'roles.store',
        	'roles.update',
            'roles.destroy',

        	'users.index',
        	'users.store',
        	'users.update',
        	'users.destroy',

        	'inputs.index',
        	'inputs.store',
        	'inputs.update',
        	'inputs.destroy',

        	'outputs.index',
        	'outputs.store',
        	'outputs.update',
        	'outputs.destroy',

        	'cities.index',
        	'cities.store',
        	'cities.update',
        	'cities.destroy',

        	'agencies.index',
        	'agencies.store',
        	'agencies.update',
        	'agencies.destroy',

        	'absences.index',
        	'absences.store',
        	'absences.update',
        	'absences.destroy',

        	'assistences.index',
			
			'absences.second',
			'absences.first'
        ]);

		$JA = Role::create(['name' => 'ENCARGADO NACIONAL DE CREDITOS']);
		$JA->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.store'
		]);

		$GNO = Role::create(['name' => 'ENCARGADO NACIONAL DE OPERACIONES']);
		$GNO->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.store'
        ]);

		$GNO = Role::create(['name' => 'ENCARGADO DE NORMALIZACION']);
		$GNO->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.store'
        ]);

		$JA = Role::create(['name' => 'ENCARGADO DE SUCURSAL']);
		$JA->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.store'
		]);
		$ASESOR = Role::create(['name' => 'ASESOR']);
		$ASESOR->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
			'absences.store'
		]);
		$PASANTE = Role::create(['name' => 'PASANTE']);
		$PASANTE->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
    }
}
