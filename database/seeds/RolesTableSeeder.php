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
        $admin = Role::create(['name' => 'ADMINISTRADOR']);
        $admin->givePermissionTo([
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

        	'departaments.index',
        	'departaments.store',
        	'departaments.update',
        	'departaments.destroy',

        	'offices.index',
        	'offices.store',
        	'offices.update',
        	'offices.destroy',

        	'assistences.index',
		]);
		$GG = Role::create(['name' => 'GERENCIA GENERAL']);
		$GG->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
		]);
		$RRHH = Role::create(['name' => 'SUB GERENCIA NACIONAL DE RECURSOS HUMANOS']);
		$RRHH->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        	'assistences.index',
		]);
		$GNCGO = Role::create(['name' => 'SUB GERENCIA NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA']);
		$GNCGO->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
		$GNC = Role::create(['name' => 'SUB GERENCIA NACIONAL COMERCIAL']);
		$GNC->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
		$GNAL = Role::create(['name' => 'SUB GERENCIA NACIONAL DE ASESORIA LEGAL']);
		$GNAL->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        ]);
		$GNO = Role::create(['name' => 'SUB GERENCIA NACIONAL DE OPERACIONES']);
		$GNO->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        ]);

		$JNTIC = Role::create(['name' => 'JEFATURA NACIONAL DE TECNOLOGIA DE LA INFORMACION Y COMUNICACION']);
		$JNTIC->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
        ]);

		$JA = Role::create(['name' => 'JEFE DE AGENCIA']);
		$JA->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
		$ASESOR = Role::create(['name' => 'ASESOR']);
		$ASESOR->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
		$PASANTE = Role::create(['name' => 'PASANTE']);
		$PASANTE->givePermissionTo([
        	'inputs.store',
        	'outputs.store',
		]);
    }
}
