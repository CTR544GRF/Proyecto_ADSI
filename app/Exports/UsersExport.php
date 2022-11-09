<?php

namespace App\Exports;

use App\Models\tbl_usuarios;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tbl_usuarios::all();
    }
}
