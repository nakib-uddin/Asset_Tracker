<?php

namespace App\Exports;

use App\Models\Asset;
use App\Models\AssetType;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AssetsExport implements FromCollection, WithHeadings
{

    protected $fromDate;
    protected $toDate;

    public function __construct($fromDate, $toDate)
    {
        $this->fromDate = $fromDate;
        $this->toDate = $toDate;
    }

    public function collection1()
    {
     

        return Asset::with('assetType')
                    ->whereBetween('purchase_date', [$this->fromDate, $this->toDate])
                    ->get();
        // return Asset::with('assetType')
        //             ->select('assets.id', 'asset_types.name', 'assets.description', 'assets.purchase_date', 'assets.purchase_price', 'assets.condition', 'assets.location', 'assets.used_by', 'assets.status')
        //             ->join('asset_types', 'assets.asset_type_id', '=', 'asset_types.id')
        //             ->whereBetween('assets.purchase_date', [$this->fromDate, $this->toDate])
        //             ->get();
    }

    public function collection()
    {
     

        // return Asset::with('assetType')
        //             ->whereBetween('purchase_date', [$this->fromDate, $this->toDate])
        //             ->get();
        return Asset::with('assetType')
                    ->select('assets.id', 'asset_types.name', 'assets.description', 'assets.purchase_date', 'assets.purchase_price', 'assets.condition', 'assets.location', 'assets.used_by', 'assets.status')
                    ->join('asset_types', 'assets.asset_type_id', '=', 'asset_types.id')
                    ->whereBetween('assets.purchase_date', [$this->fromDate, $this->toDate])
                    ->get();
    }
    
    public function headings(): array
    {
        return [
            'ID',
            'Asset Type Name',
            'Description',
            'Purchase Date',
            'Purchase Price',
            'Condition',
            'Location',
            'Used By',
            'Status',
        ];
    }

}
