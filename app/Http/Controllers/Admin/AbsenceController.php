<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::all();
        $users = User::all();
        return view('absences.index', compact('absences', 'users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if ($request->type == 'Vacaciones') {
            Absence::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            $request["first"] = true;
            $request["second"] = true;
            Absence::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        }
    }

    public function show(Absence $absence)
    {
        //
    }

    public function edit(Absence $absence)
    {
        //
    }

    public function update(Request $request, Absence $absence)
    {
        $absence->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Absence $absence)
    {
        $absence->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }





    public function first(Absence $absence)
    {
        $absence->first = true;
        $absence->save();
        return back()->with('confirmation','Aprobado Correctamente');
    }

    public function second(Absence $absence)
    {
        if ($absence->second == false) {

            $user = $absence->user;
            $user->vacation = $user->vacation-1;
            $user->save();

            $absence->second = true;
            $absence->save();
            return back()->with('confirmation','Aprobado Correctamente');
        } else {
            return back()->with('confirmation','Aprobado Correctamente');
        }


    }

    public function vacation()
    {
        $user = Auth::user();

        if ($user->hasRole('DEPARTAMENTO NACIONAL DE RECURSOS HUMANOS')) {
            $rrhh1 = DB::table('absences')
            ->where('type', 'Vacaciones')
            ->where('first', true)
            ->where('second', false)
            ->join('users', 'users.id', '=', 'absences.user_id')
            ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
            ->whereIn('roles.name', ['ENCARGADO NACIONAL DE OPERACIONES', 'ENCARGADO DE SUCURSAL', 'ASESOR'])
            ->select('absences.*', 'users.name')
            ->get();
            
            $rrhh2 = DB::table('absences')
            ->where('type', 'Vacaciones')
            ->where('second', false)
            ->join('users', 'users.id', '=', 'absences.user_id')
            ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
            ->whereIn('roles.name', ['GERENCIA GENERAL', 
                                        'DEPARTAMENTO NACIONAL DE RECURSOS HUMANOS', 
                                        'DEPARTAMENTO NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA', 
                                        'DEPARTAMENTO NACIONAL COMERCIAL', 
                                        'DEPARTAMENTO NACIONAL DE ASESORIA LEGAL', 
                                        'ENCARGADO NACIONAL DE CREDITOS', 
                                        'TIC',
                                        ])
            ->select('absences.*', 'users.name')
            ->get();
    
            $absences = $rrhh1->concat($rrhh2);

            return view('vacations.index', compact('absences'));
            // return $absences;
        } elseif ($user->hasRole('DEPARTAMENTO NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA')) {
            $absences = DB::table('absences')
            ->where('type', 'Vacaciones')
            ->where('first', false)
            ->join('users', 'users.id', '=', 'absences.user_id')
            ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
            ->whereIn('roles.name', ['ENCARGADO NACIONAL DE OPERACIONES'])
            ->select('absences.*', 'users.name')
            ->get();
            return view('vacations.index', compact('absences'));
        } elseif ($user->hasRole('DEPARTAMENTO NACIONAL COMERCIAL')) {
            $absences = DB::table('absences')
            ->where('type', 'Vacaciones')
            ->where('first', false)
            ->join('users', 'users.id', '=', 'absences.user_id')
            ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
            ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
            ->whereIn('roles.name', ['ENCARGADO DE SUCURSAL', 'ASESOR',])
            ->select('absences.*', 'users.name')
            ->get();

            return view('vacations.index', compact('absences'));
        } else {
            $absences = Absence::all();
            return view('vacations.index', compact('absences'));
            // return $absences;
        }
        

        // return $user->hasRole('TIC');
    }
}
