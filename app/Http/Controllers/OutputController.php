<?php

namespace App\Http\Controllers;

use App\Input;
use App\Output;
use App\User;
use App\Office;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use UAParser\Parser;

class OutputController extends Controller
{

    public function index()
    {
        $users = User::get();
        $outputs = Output::orderBy('id')->get();
        return view('outputs.index', compact('outputs', 'users'));
    }


    public function store()
    {
        $user = Auth::user();
        $ipAgency = $user->office->ip;
        $phoneRegist = $user->phone;

        $now = Carbon::now();
        $date = $now->format('Y-m-d');

        $agenteDeUsuario = $_SERVER["HTTP_USER_AGENT"];
        $resultado = Parser::create()->parse($agenteDeUsuario);

        // $navegador = $resultado->ua->toString();
        // $sistema = $resultado->os->toString();

        $output = new Output();
        $ipUser = $output->getIp();
        $phoneUser = $resultado->device->family;
        $inputsNow = Input::where([
            ['user_id', '=', $user->id],
            ['date', '=', $date],
        ])->exists();

        $dateAgency = Carbon::create($user->office->exit);
        $outputAgency =Carbon::create($now->year, $now->month, $now->day, $dateAgency->hour, $dateAgency->minute, $dateAgency->second);
        $dif = ($now->diffInMinutes($outputAgency, false));

        // if ($user->hasAnyRole('JEFE DE AGENCIA', 'ASESOR', 'PASANTE')) {
        //     if ($ipUser == $ipAgency) {
                if ($phoneRegist == $phoneUser) {
                    if ($inputsNow) {
                        $inputs = Input::where([
                            ['user_id', '=', $user->id],
                            ['date', '=', $date],
                        ])->firstOrFail();
                        $outputsNow = $inputs->output;
                        if (!$outputsNow) {
                            if ($dif > 0) {
                                $output->ip = $output->getIp();
                                $output->phone = $phoneUser;
                                $output->date = $now->format('Y-m-d');
                                $output->hour = $now->format('H:i:s');
                                $output->state = 0;
                                $output->input_id = $inputs->id;
                                $output->save();
                                return back()->with('confirmation','Salida Temprano Registrado');
                                // return "Estas en la empresa, con tu celular, no marcaste Salida aun y en hora";
                            } else {
                                $output->ip = $output->getIp();
                                $output->phone = $phoneUser;
                                $output->date = $now->format('Y-m-d');
                                $output->hour = $now->format('H:i:s');
                                $output->state = 1;
                                $output->input_id = $inputs->id;
                                $output->save();
                                return back()->with('confirmation','Salida Tarde Registrado');
                                // return "Estas en la empresa, con tu celular y no marcaste Salida aun";
                            }
                        } else {
                            return back()->with('validation','Salida ya Marcada HOY');
                            // return "Estas en la empresa y con tu celular";
                        }
                    } else {
                        return back()->with('validation','Entrada no Marcada Hoy');
                        // return "Estas en la empresa y con tu celular";
                    }
                } else {
                    return back()->with('validation','WIFI Correcto, Dispositivo Incorrecto');
                    // return "Estas en la empresa";
                }
            // } else {
            //     return back()->with('validation','WIFI Incorrecto');
            //     // return "No Estas en la empresa";
            // }
        // } else {
        //     if (Office::where('ip', '=', $ipUser)->exists()) {
        //         if ($phoneRegist == $phoneUser) {
        //             if ($inputsNow) {
        //                 $inputs = Input::where([
        //                     ['user_id', '=', $user->id],
        //                     ['date', '=', $date],
        //                 ])->firstOrFail();
        //                 $outputsNow = $inputs->output;
        //                 if ($outputsNow == 0) {
        //                     if ($dif >= 0) {
        //                         $output->ip = $output->getIp();
        //                         $output->phone = $phoneUser;
        //                         $output->date = $now->format('Y-m-d');
        //                         $output->hour = $now->format('H:i:s');
        //                         $output->state = 0;
        //                         $output->input_id = $inputs->id;
        //                         $output->save();
        //                         return back()->with('confirmation','Salida Temprano Registrado');
        //                         // return "Estas en la empresa, con tu celular, no marcaste Salida aun y en hora";
        //                     } else {
        //                         $output->ip = $output->getIp();
        //                         $output->phone = $phoneUser;
        //                         $output->date = $now->format('Y-m-d');
        //                         $output->hour = $now->format('H:i:s');
        //                         $output->state = 1;
        //                         $output->input_id = $inputs->id;
        //                         $output->save();
        //                         return back()->with('confirmation','Salida Tarde Registrado');
        //                         // return "Estas en la empresa, con tu celular y no marcaste Salida aun";
        //                     }
        //                 } else {
        //                     return back()->with('validation','Salida ya Marcada HOY');
        //                     // return "Estas en la empresa y con tu celular";
        //                 }
        //             } else {
        //                 return back()->with('validation','Entrada no Marcada Hoy');
        //                 // return "Estas en la empresa y con tu celular";
        //             }
        //         } else {
        //             return back()->with('validation','WIFI Correcto, Dispositivo Incorrecto');
        //             // return "Estas en la empresa";
        //         }

        //     } else {
        //         return back()->with('validation','WIFI Incorrecto');
        //         // return "No Estas en la empresa";
        //     }
        // }
    }

    public function update(Request $request, $id)
    {
        $output = Output::where('id','=', $id)->firstOrFail();

        $user = Auth::user();
        $now = Carbon::now()->subMinutes(2);
        $outputAgency = Carbon::create($user->office->exit);
        $outputNew =Carbon::create($request->hour);
        $dif = ($outputNew->diffInMinutes($outputAgency, false));
        if ($dif > 0) {
            $request["phone"]=$user->phone;
            $request["state"]=0;
            $output->update($request->all());
        } else {
            $request["phone"]=$user->phone;
            $request["state"]=1;
            $output->update($request->all());
        }

        return back()->with('confirmation','Entrada Actualizado Correctamente');
    }

    public function destroy($id)
    {
        $output = Output::where('id', '=', $id)->firstOrFail();
        $output->delete();
        return back();
    }


    public function marck()
    {
        return view('outputs.mark');
    }


    public function storeOut(Request $request)
    {
        $dateUser = Carbon::create($request->date);

        $input = Input::where('id', '=', $request->input_id)->firstOrFail();
        $dateAgency = Carbon::create($input->user->office->exit);
        $inputAgency =Carbon::create($dateUser->year, $dateUser->month, $dateUser->day, $dateAgency->hour, $dateAgency->minute, $dateAgency->second);

        $hourUser = Carbon::create($request->hour);
        $inputUser =Carbon::create($dateUser->year, $dateUser->month, $dateUser->day, $hourUser->hour, $hourUser->minute, $hourUser->second);

        $dif = ($inputUser->diffInMinutes($inputAgency, false));

        $output = new Output();
        $output->ip = $request->ip;
        $output->phone = $input->user->phone;
        $output->date = $input->date;
        $output->hour = $request->hour;
        if ($dif > 0) {
            $output->state = 0;
        } else {
            $output->state = 1;
        }
        $output->input_id = $request->input_id;
        $output->save();
        return back()->with('confirmation','Salida Registrado con Exito');
        return $request;
    }
}
