<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gg = User::create([
            'name'       => 'LUIS ALEJANDRO ARZE RICO',
            'vacation'       => '15',
            'email'      => 'proeza.ale@gmail.com',
            'password'      => bcrypt('proezaalejandro2021'),
            'phone'       => 'Other',
            'agency_id'      => 1,
        ]);
        $gg->assignRole('GERENCIA GENERAL');

        $rrhh = User::create([
            'name'       => 'MARTHA PAOLA AMADOR',
            'vacation'       => '11',
            'email'      => 'proeza.marthapaola@gmail.com',
            'password'      => bcrypt('proezamarthapaola2021'),
            'phone'       => 'Huawei Browser',
            'agency_id'      => 1,
        ]);
        $rrhh->assignRole('DEPARTAMENTO NACIONAL DE RECURSOS HUMANOS');

        $gnc = User::create([
            'name'       => 'GUALBERTO EDSSON COCA VARGAS',
            'vacation'       => '9',
            'email'      => 'proeza.edsson@gmail.com',
            'password'      => bcrypt('proezaedsson2021'),
            'phone'       => 'Samsung SM-A315G',
            'agency_id'      => 1,
        ]);
        $gnc->assignRole('DEPARTAMENTO NACIONAL COMERCIAL');

        $gncgo = User::create([
            'name'       => 'LIMBERT RODRÍGUEZ ORELLANA',
            'vacation'       => '11',
            'email'      => 'proeza.limbert@gmail.com',
            'password'      => bcrypt('proezalimbert2021'),
            'phone'       => 'XiaoMi Redmi Note 7',
            'agency_id'      => 1,
        ]);
        $gncgo->assignRole('DEPARTAMENTO NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA');

        $gnal = User::create([
            'name'       => 'TERESA ALBA MIRANDA',
            'vacation'       => '6',
            'email'      => 'proeza.teresa@gmail.com',
            'password'      => bcrypt('proezateresa2021'),
            'phone'       => 'MAR-LX3A',
            'agency_id'      => 1,
        ]);
        $gnal->assignRole('DEPARTAMENTO NACIONAL DE ASESORIA LEGAL');

        $jtic = User::create([
            'name'       => 'ROGER ALDAIR HUARACHI TAPIA',
            'vacation'       => '13',
            'email'      => 'proeza.roger@gmail.com',
            'password'      => bcrypt('6754212567542125'),
            'phone'       => 'M2101K6G',
            'agency_id'      => 1,
        ]);
        $jtic->assignRole('TIC');

        $gnc = User::create([
            'name'       => 'ELIZABETH CALLE COAQUIRA',
            'vacation'       => '8',
            'email'      => 'proeza.elycalle@gmail.com',
            'password'      => bcrypt('proezaelycalle2021'),
            'phone'       => 'Samsung SM-A115M',
            'agency_id'      => 1,
        ]);
        $gnc->assignRole('ENCARGADO NACIONAL DE CREDITOS');
        
        $gno = User::create([
            'name'       => 'YASHIRA DANYA CHAVEZ CAMACHO',
            'vacation'       => '0',
            'email'      => 'proeza.danya@gmail.com',
            'password'      => bcrypt('proezadanya2021'),
            'phone'       => 'TECNO CE7j',
            'agency_id'      => 2,
        ]);
        $gno->assignRole('ENCARGADO NACIONAL DE OPERACIONES');

        $eo = User::create([
            'name'       => 'JHOANA BRENDA JIMENEZ FLORES',
            'vacation'       => '5',
            'email'      => 'proeza.brenda@gmail.com',
            'password'      => bcrypt('proezabrenda2021'),
            'phone'       => 'Samsung SM-A125M',
            'agency_id'      => 2,
        ]);
        $eo->assignRole('ENCARGADO DE NORMALIZACION');



        $jas = [
            [
                'name'       => 'CARLA ANDREA CLAROS PEREDO',
                'vacation'       => '15',
                'email'      => 'proeza.carla22@gmail.com',
                'password'      => bcrypt('proezacarla222021'),
                'phone'       => 'iPhone',
                'agency_id'      => 2,
            ],
            [
                'name'       => 'ALEX GUERRA GUZMAN',
                'vacation'       => '12',
                'email'      => 'proeza.alex@gmail.com',
                'password'      => bcrypt('proezaalex2021'),
                'phone'       => 'Huawei STK-LX3',
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROXANA LLANOS MAMANI',
                'vacation'       => '9',
                'email'      => 'proeza.roxana@gmail.com',
                'password'      => bcrypt('proezaroxana2021'),
                'phone'       => 'Samsung SM-G532M',
                'agency_id'      => 4,
            ],
            [
                'name'       => 'LISCIEN MARIELA SANTALLA ANCE',
                'vacation'       => '15',
                'email'      => 'proeza.mariela@gmail.com',
                'password'      => bcrypt('proezamariela2021'),
                'phone'       => 'M2151K7BL',
                'agency_id'      => 5,
            ],
            [
                'name'       => 'VERONICA ANEIVA SALAZAR',
                'vacation'       => '11',
                'email'      => 'proeza.veronica@gmail.com',
                'password'      => bcrypt('proezaveronica2021'),
                'phone'       => 'Samsung SM-A325M',
                'agency_id'      => 6,
            ]
        ];
        foreach ($jas as $ja) {
            $userG = User::create([
                'name'       => $ja['name'],
                'vacation'       => '15',
                'email'       => $ja['email'],
                'password'       => $ja['password'],
                'phone'       => $ja['phone'],
                'agency_id'       => $ja['agency_id'],
            ]);
            $userG->assignRole('ENCARGADO DE SUCURSAL');
        }


        $asesors = [
            [
                'name'       => 'JHONNY PEDRO HUAYHUASI SOLIS',
                'vacation'       => '13',
                'email'      => 'proeza.jhonny9@gmail.com',
                'password'      => bcrypt('proezajhonny92021'),
                'phone'       => 'XiaoMi Redmi Note 7',
                'agency_id'      => 2,
            ],
            [
                'name'       => 'PABLO CHOQUE CAYO',
                'vacation'       => '13',
                'email'      => 'proeza.pablochoque@gmail.com',
                'password'      => bcrypt('proezapablochoque2021'),
                'phone'       => 'Samsung SM-A155M',
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ARACELY MONTOYA ANDIA',
                'vacation'       => '13',
                'email'      => 'proeza.aracely@gmail.com',
                'password'      => bcrypt('proezaaracely2021'),
                'phone'       => 'XiaoMi Redmi S2',
                'agency_id'      => 3,
            ],
            [
                'name'       => 'ROCIO CLAROS ROJAS',
                'vacation'       => '13',
                'email'      => 'proeza.rocio@gmail.com',
                'password'      => bcrypt('proezarocio2021'),
                'phone'       => 'Samsung SM-A115M',
                'agency_id'      => 4,
            ],
            [
                'name'       => 'ZULEMA IRIARTE TORRICO',
                'vacation'       => '0',
                'email'      => 'proeza.zulemairiarte@gmail.com',
                'password'      => bcrypt('proezazulemairiarte2021'),
                'phone'       => 'TECNO KE5k',
                'agency_id'      => 4,
            ],
            [
                'name'       => 'NIDELVIA JIMÉNEZ HUARAYO',
                'vacation'       => '15',
                'email'      => 'proeza.nidelvia@gmail.com',
                'password'      => bcrypt('proezanidelvia2021'),
                'phone'       => 'XiaoMi Redmi Note 8 Pro',
                'agency_id'      => 5,
            ],
            [
                'name'       => 'LIDIA LEQUIPE QUISPE',
                'vacation'       => '13',
                'email'      => 'proeza.lidia@gmail.com',
                'password'      => bcrypt('proezalidia92021'),
                'phone'       => 'Samsung SM-A115M',
                'agency_id'      => 6,
            ],
            [
                'name'       => 'WILLIAMS YHAMIL SIRPA',
                'vacation'       => '13',
                'email'      => 'proeza.williams@gmail.com',
                'password'      => bcrypt('proezawilliams2021'),
                'phone'       => 'Samsung SM-A725M',
                'agency_id'      => 6,
            ],
        ];
        foreach ($asesors as $asesor) {
            $userG = User::create([
                'name'       => $asesor['name'],
                'vacation'       => '15',
                'email'       => $asesor['email'],
                'password'       => $asesor['password'],
                'phone'       => $asesor['phone'],
                'agency_id'       => $asesor['agency_id'],
            ]);
            $userG->assignRole('ASESOR');
        }


        $pasantes = [
            [
                'name'       => 'NATALY ALISSIN GUERRERO MENDIZABAL',
                'vacation'       => '0',
                'email'      => 'proeza.nataly@gmail.com',
                'password'      => bcrypt('proezanataly2021'),
                'phone'       => 'Samsung SM-J260MU',
                'agency_id'      => 2,
            ],
            [
                'name'       => 'MARIA LUISA BLAD TUBIETA',
                'vacation'       => '0',
                'email'      => 'proeza.mariablaz@gmail.com',
                'password'      => bcrypt('proezamariablaz2021'),
                'phone'       => 'Samsung SM-J250M',
                'agency_id'      => 2,
            ],
            [
                'name'       => 'RODRIGO ADONAY SANCHES DOMINGUEZ',
                'vacation'       => '0',
                'email'      => 'proeza.rodrigosanchez@gmail.com',
                'password'      => bcrypt('proezarodrigosanchez2021'),
                'phone'       => 'Samsung SM-J415G',
                'agency_id'      => 2,
            ],
            [
                'name'       => 'ERMINIA ALMENDRAS JIMENEZ',
                'vacation'       => '0',
                'email'      => 'proeza.erminia@gmail.com',
                'password'      => bcrypt('proezaerminia2021'),
                'phone'       => 'XiaoMi Redmi Note 8 Pro',
                'agency_id'      => 4,
            ],
            [
                'name'       => 'ELIZABETH VILLCA CHOQUE',
                'vacation'       => '0',
                'email'      => 'proeza.elizabeth@gmail.com',
                'password'      => bcrypt('proezaelizabeth2021'),
                'phone'       => 'Samsung SM-A505G',
                'agency_id'      => 5,
            ],
            [
                'name'       => 'ANGEL CACERES SEJAS',
                'vacation'       => '0',
                'email'      => 'proeza.angel@gmail.com',
                'password'      => bcrypt('proezaangel2021'),
                'phone'       => 'Samsung SM-A715F',
                'agency_id'      => 5,
            ],
            [
                'name'       => 'GLADIS TRONCOSO VELIZ',
                'vacation'       => '0',
                'email'      => 'proeza.gladys@gmail.com',
                'password'      => bcrypt('proezawilliams2021'),
                'phone'       => 'Samsung SM-A715F',
                'agency_id'      => 6,
            ]
        ];
        foreach ($pasantes as $pasante) {
            $userG = User::create([
                'name'       => $pasante['name'],
            'vacation'       => '15',
                'email'       => $pasante['email'],
                'password'       => $pasante['password'],
                'phone'       => $pasante['phone'],
                'agency_id'       => $pasante['agency_id'],
            ]);
            $userG->assignRole('PASANTE');
        }
    }
}
