<?php

namespace App\Imports;

use App\Models\Bank;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BanksImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bank([
            'License'     => $row[0],
            'Model'    => $row[1],
            'Year'    => $row[2],
            'Chasis_number'    => $row[3],
            'Bank_Name'    => $row[4],
            'Color'    => $row[5],
            'Condition'    => $row[6],
            'Key_Available'    => $row[7]
            
        ]);
    }
}
