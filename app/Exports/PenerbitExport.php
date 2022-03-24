<?php

namespace App\Exports;

use App\Models\Penerbit;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenerbitExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penerbit::all();
    }
}
