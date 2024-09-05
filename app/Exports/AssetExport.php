<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Asset;


class AssetExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Asset::select([
            'asset_image',
            'asset_tag',
            'description',
            'brand',
            'purchase_date',
            'cost',
        ])->get();
    }

    public function headings(): array
    {
        return [
            'Asset Image',
            'Asset Tag',
            'Description',
            'Brand',
            'Purchase Date',
            'Cost',
        ];
    }
}