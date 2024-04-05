<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $fillable = [
        'asset_type_id',
        'description',
        'purchase_date',
        'purchase_price',
        'condition',
        'location',
        'used_by',
        'status',
    ];
     // Define the asset type relationship
     public function assetType()
     {
         return $this->belongsTo(AssetType::class, 'asset_type_id');
     }
}
