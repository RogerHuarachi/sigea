<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Absence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $absences = $user->absences;
        // return $absences;
        return view('user.absences.index', compact('absences'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request["user_id"] = $user->id;
        $request["type"] = 'Vacaciones';
        if ($user->hasRole(['GERENCIA GENERAL',
                        'DEPARTAMENTO NACIONAL DE RECURSOS HUMANOS',
                        'DEPARTAMENTO NACIONAL DE CONTABILIDAD Y GESTION OPERATIVA',
                        'DEPARTAMENTO NACIONAL COMERCIAL',
                        'DEPARTAMENTO NACIONAL DE ASESORIA LEGAL',
                        'ENCARGADO NACIONAL DE CREDITOS',
                        'TIC'
        ])) {
            $request["first"] = true;
            
            Absence::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
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
        //
    }

    public function destroy(Absence $absence)
    {
        //
    }
}
