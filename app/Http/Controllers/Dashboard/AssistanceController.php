<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use App\Input;

class AssistanceController extends Controller
{
    public function index()
    {
        $users = User::get();
        $total = $users->count()-1;

        $date = Carbon::now();

        $inputs = Input::where('date', $date->toDateString())->get();

        $temprano = $inputs->where('state', '0')->count();
        $tarde = $inputs->where('state', '1')->count();

        $ausencia = $total-$inputs->count();



        $inputs = Input::where('date','=', $date->toDateString())->get();

            // return $folders;

        return view('dashboards.assistance', compact('total', 'temprano', 'tarde', 'ausencia', 'inputs'));
    }
    public function print()
    {


        $inputs = Input::all();

            // return $folders;

        return view('dashboards.print', compact('inputs'));
    }

    public function timeRetUser()
    {
        $timeRetUser = Input::timeRetUser();
        $array = array();
        foreach($timeRetUser as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }

    public function timeRetAge1()
    {
        $timeRetAge = Input::timeRetAge(1);
        $array = array();
        foreach($timeRetAge as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }
    public function timeRetAge2()
    {
        $timeRetAge = Input::timeRetAge(2);
        $array = array();
        foreach($timeRetAge as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }
    public function timeRetAge3()
    {
        $timeRetAge = Input::timeRetAge(3);
        $array = array();
        foreach($timeRetAge as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }
    public function timeRetAge4()
    {
        $timeRetAge = Input::timeRetAge(4);
        $array = array();
        foreach($timeRetAge as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }
    public function timeRetAge5()
    {
        $timeRetAge = Input::timeRetAge(5);
        $array = array();
        foreach($timeRetAge as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }
    public function timeRetAge6()
    {
        $timeRetAge = Input::timeRetAge(6);
        $array = array();
        foreach($timeRetAge as $date){
            $array += [$date->name => $date->total_delayed];
        }
        return $array;
    }
}
