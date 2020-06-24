<?php

namespace App\Exports;

use App\Report;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ReportsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Report::all();
    }

    public function headings(): array
    {
        return [
          'id',
            'idParalax',
            'имя',
            'год',
            'месяц',
            'количество рабочих часов',
            'отработано',
            'зарплата',
            'начислено сом'
        ];
    }
}
