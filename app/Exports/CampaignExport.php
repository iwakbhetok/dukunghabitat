<?php

namespace App\Exports;

use App\Campaign;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

// class DonationExport implements FromCollection, WithHeadings, FromQuery
class CampaignExport implements WithHeadings, FromQuery
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
            return Campaign::query()->whereMonth('created_at', $this->month);
        }else{
            return Campaign::query();
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
            'Donation ID',
            'Sender',
            'Receiver',
            'Message',
            'UUID',
            'Created date',
            'Updated Date'
        ];
    }
}
