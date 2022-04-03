<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $admin = User::create([
                    'name'       => 'ADMINISTRADOR',
                    'email'      => 'adm@gmail.com',
                    'password'      => bcrypt('6754212567542125'),
                    'phone'       => 'Other',
                    'office_id'      => 1,
        ]);
        $admin->assignRole('ADMINISTRADOR');

        $gg = User::create([
                    'name'       => 'LUIS ALEJANDRO ARZE RICO',
                    'email'      => 'proeza.ale@gmail.com',
                    'password'      => bcrypt('proezaalejandro2021'),
                    'phone'       => 'Other',
                    'office_id'      => 1,
                ]);
        $gg->assignRole('GERENCIA GENERAL');

        $rrhh = User::create([
            'name'       => 'MARTHA PAOLA AMADOR',
            'email'      => 'proeza.marthapaola@gmail.com',
            'password'      => bcrypt('proezamarthapaola2021'),
            'phone'       => 'Moto G Play',
            'office_id'      => 1,
        ]);
        $rrhh->assignRole('SUB GERENCIA NACIONAL DE RECURSOS HUMANOS');

        $gnc = User::create([
            'name'       => 'GUALBERTO EDSSON COCA VARGAS',
            'email'      => 'proeza.edsson@gmail.com',
            'password'      => bcrypt('proezaedsson2021'),
            'phone'       => 'Samsung SM-A315G',
            'office_id'      => 1,
        ]);
        $gnc->assignRole('SUB GERENCIA NACIONAL COMERCIAL');

        $gncgo = User::create([
            'name'       => 'LIMBERT RODRÍGUEZ ORELLANA',
            'email'      => 'proeza.limbert@gmail.com',
            'password'      => bcrypt('proezalimbert2021'),
            'phone'       => 'XiaoMi Redmi Note 7',
            'office_id'      => 1,
        ]);
        $gncgo->assignRole('SUB GERENCIA NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA');

        $gnal = User::create([
            'name'       => 'TERESA ALBA MIRANDA',
            'email'      => 'proeza.teresa@gmail.com',
            'password'      => bcrypt('proezateresa2021'),
            'phone'       => 'MAR-LX3A',
            'office_id'      => 1,
        ]);
        $gnal->assignRole('SUB GERENCIA NACIONAL DE ASESORIA LEGAL');

        $gno = User::create([
            'name'       => 'JHOANA BRENDA JIMENEZ FLORES',
            'email'      => 'proeza.brenda@gmail.com',
            'password'      => bcrypt('proezabrenda2021'),
            'phone'       => 'Samsung SM-J610G',
            'office_id'      => 1,
        ]);
        $gno->assignRole('SUB GERENCIA NACIONAL DE OPERACIONES');

        $jtic = User::create([
            'name'       => 'ROGER ALDAIR HUARACHI TAPIA',
            'email'      => 'proeza.roger@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'phone'       => 'Che2-L23',
            'office_id'      => 1,
        ]);
        $jtic->assignRole('JEFATURA NACIONAL DE TECNOLOGIA DE LA INFORMACION Y COMUNICACION');


        $jas = [
            [
                'name'       => 'ELIZABETH CALLE COAQUIRA',
                'email'      => 'proeza.elycalle@gmail.com',
                'password'      => bcrypt('proezaelycalle2021'),
                'phone'       => 'Samsung SM-A115M',
                'office_id'      => 2,
            ],
            [
                'name'       => 'PABLO CHOQUE CAYO',
                'email'      => 'proeza.pablochoque@gmail.com',
                'password'      => bcrypt('proezapablochoque2021'),
                'phone'       => 'Samsung SM-A105M',
                'office_id'      => 3,
            ],
            [
                'name'       => 'ROXANA LLANOS MAMANI',
                'email'      => 'proeza.roxana@gmail.com',
                'password'      => bcrypt('proezaroxana2021'),
                'phone'       => 'Samsung SM-G532M',
                'office_id'      => 4,
            ],
            [
                'name'       => 'VERONICA ANEIVA SALAZAR',
                'email'      => 'proeza.veronica@gmail.com',
                'password'      => bcrypt('proezaveronica2021'),
                'phone'       => 'Samsung SM-A217M',
                'office_id'      => 6,
            ]
        ];
        foreach ($jas as $ja) {
            $userG = User::create([
                'name'       => $ja['name'],
                'email'       => $ja['email'],
                'password'       => $ja['password'],
                'phone'       => $ja['phone'],
                'office_id'       => $ja['office_id'],
            ]);
            $userG->assignRole('JEFE DE AGENCIA');
        }


        $asesors = [
            [
                'name'       => 'ALEX GUERRA GUZMAN',
                'email'      => 'proeza.alex@gmail.com',
                'password'      => bcrypt('proezaalex2021'),
                'phone'       => 'Huawei STK-LX3',
                'office_id'      => 2,
            ],
            [
                'name'       => 'CARLA ANDREA CLAROS PEREDO',
                'email'      => 'proeza.carla22@gmail.com',
                'password'      => bcrypt('proezacarla222021'),
                'phone'       => 'Samsung SM-G950F',
                'office_id'      => 2,
            ],
            [
                'name'       => 'JHONNY PEDRO HUAYHUASI SOLIS',
                'email'      => 'proeza.jhonny9@gmail.com',
                'password'      => bcrypt('proezajhonny92021'),
                'phone'       => 'F3313',
                'office_id'      => 2,
            ],
            [
                'name'       => 'ARACELY MONTOYA ANDIA',
                'email'      => 'proeza.aracely@gmail.com',
                'password'      => bcrypt('proezaaracely2021'),
                'phone'       => 'XiaoMi Redmi S2',
                'office_id'      => 3,
            ],
            [
                'name'       => 'MERY GARCIA AÑAMOR',
                'email'      => 'proeza.merygarcia@gmail.com',
                'password'      => bcrypt('proezamerygarcia2021'),
                'phone'       => 'TECNO CE7j',
                'office_id'      => 3,
            ],
            [
                'name'       => 'ROCIO CLAROS ROJAS',
                'email'      => 'proeza.rocio@gmail.com',
                'password'      => bcrypt('proezarocio2021'),
                'phone'       => 'Huawei PRA-LX3',
                'office_id'      => 4,
            ],
            [
                'name'       => 'JOSE RAMOS YUJRA',
                'email'      => 'proeza.ramos@gmail.com',
                'password'      => bcrypt('proezaramos2021'),
                'phone'       => 'Samsung SM-J200M',
                'office_id'      => 5,
            ],
            [
                'name'       => 'DOUGLAS COPA RODRIGUEZ',
                'email'      => 'proeza.douglas@gmail.com',
                'password'      => bcrypt('proezadouglas2021'),
                'phone'       => 'Samsung SM-J260M',
                'office_id'      => 5,
            ]
        ];
        foreach ($asesors as $asesor) {
            $userG = User::create([
                'name'       => $asesor['name'],
                'email'       => $asesor['email'],
                'password'       => $asesor['password'],
                'phone'       => $asesor['phone'],
                'office_id'       => $asesor['office_id'],
            ]);
            $userG->assignRole('ASESOR');
        }


        $pasantes = [
            [
                'name'       => 'CELIA TICONA',
                'email'      => 'proeza.celia@gmail.com',
                'password'      => bcrypt('proezacelia2021'),
                'phone'       => 'Samsung SM-J260MU',
                'office_id'      => 4,
            ],
            [
                'name'       => 'WILMER GUAMAN VARGAS',
                'email'      => 'proezawilmerguaman@gmail.com',
                'password'      => bcrypt('proezawilmerguaman2021'),
                'phone'       => 'Samsung SM-J250M',
                'office_id'      => 4,
            ],
            [
                'name'       => 'LISCIEN MARIELA SANTALLA ANCE',
                'email'      => 'proeza.mariela@gmail.com',
                'password'      => bcrypt('proezamariela2021'),
                'phone'       => 'Samsung SM-J415G',
                'office_id'      => 4,
            ],
            [
                'name'       => 'NIDELVIA JIMÉNEZ HUARAYO',
                'email'      => 'proeza.nidelvia@gmail.com',
                'password'      => bcrypt('proezanidelvia2021'),
                'phone'       => 'XiaoMi Redmi Note 8 Pro',
                'office_id'      => 4,
            ],
            [
                'name'       => 'LIDIA LEQUIPE QUISPE',
                'email'      => 'proeza.lidia@gmail.com',
                'password'      => bcrypt('proezalidia92021'),
                'phone'       => 'Samsung SM-A505G',
                'office_id'      => 6,
            ],
            [
                'name'       => 'WILLIAMS YHAMIL SIRPA',
                'email'      => 'proeza.williams@gmail.com',
                'password'      => bcrypt('proezawilliams2021'),
                'phone'       => 'Samsung SM-A715F',
                'office_id'      => 6,
            ],
            [
                'name'       => 'MARIANA NILA ROJAS RICO',
                'email'      => 'proeza.mariana@gmail.com',
                'password'      => bcrypt('proezamariana2021'),
                'phone'       => 'Huawei ANE-LX3',
                'office_id'      => 6,
            ],
        ];
        foreach ($pasantes as $pasante) {
            $userG = User::create([
                'name'       => $pasante['name'],
                'email'       => $pasante['email'],
                'password'       => $pasante['password'],
                'phone'       => $pasante['phone'],
                'office_id'       => $pasante['office_id'],
            ]);
            $userG->assignRole('PASANTE');
        }
    }
}
