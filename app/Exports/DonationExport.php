<?php

namespace App\Exports;

use App\Donation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

// class DonationExport implements FromCollection, WithHeadings, FromQuery
class DonationExport implements WithHeadings, FromQuery
{
    use Exportable;

    public function forPeriod(int $month, int $year)
    {
        $this->year = $year;
        $this->month = $month;
        return $this;
    }

    public function query()
    {
        if($this->month != 0){
            return Donation::query()->whereMonth('created_at', $this->month);
        }else{
            return Donation::query();
        }   
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Donation::all();
    // }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Donation Type',
            'Amount',
            'Privacy',
            'Status',
            'Snap Token',
            'Created date',
            'Updated Date'
        ];
    }
}
