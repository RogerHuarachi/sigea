<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // if ($request->type == 'Vacaciones') {
        //     $user = User::where('id','=', $request->user_id)->firstOrFail();
        //     $user->vacation = $user->vacation-1;
        //     $user->save();

        //     Absence::create($request->all());
        //     return back()->with('confirmation','Registrado Correctamente');
        // } else {
        //     Absence::create($request->all());
        //     return back()->with('confirmation','Registrado Correctamente');
        // }

        Absence::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
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
        // $absences = DB::table('absences')
        // ->join('users', 'users.id', '=', 'absences.user_id')
        // ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
        // ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
        // ->where('roles.name', 'ENCARGADO DE SUCURSAL')
        // ->orWhere('roles.name', 'ASESOR')
        // ->select('absences.*')
        // ->where('first', false)
        // ->get();

        // $absences = DB::table('absences')
        // ->join('users', 'users.id', '=', 'absences.user_id')
        // ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
        // ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
        // ->where('roles.name', 'ENCARGADO NACIONAL DE OPERACIONES')
        // ->select('absences.*')
        // ->where('first', false)
        // ->get();

        $absences = DB::table('absences')
        ->join('users', 'users.id', '=', 'absences.user_id')
        ->join('user_has_roles', 'user_has_roles.user_id', '=', 'users.id')
        ->join('roles', 'roles.id', '=', 'user_has_roles.role_id')
        ->where('roles.name', 'ENCARGADO NACIONAL DE OPERACIONES')
        ->select('absences.*')
        ->where('first', false)
        ->where('first', false)
        ->get();

        return $absences;
    }
}
