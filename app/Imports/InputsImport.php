<?php

namespace App\Imports;

use App\Input;
use Maatwebsite\Excel\Concerns\ToModel;

class InputsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Input([
            'ip'            => $row[0],//
            'phone'         => $row[1],//
            'date'          => $row[2],//
            'hour'          => $row[3],//
            'state'         => $row[4],//
            'delayed'       => $row[5],//b
            'user_id'       => $row[6],//c
            'created_at'    => $row[7],//d
        ]);
    }
}
