<?php

namespace App\Imports;

use App\Models\Datalog;
use Maatwebsite\Excel\Concerns\ToModel;

class DatalogImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Datalog([
            'Timestamp' => $row[0],
            'TZ' => $row[1],
            'PWR12V_State' => $row[2],
            'VNotch2_mA' => $row[3],
        ]);
    }
}
