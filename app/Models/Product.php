<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = "ProductID";
    protected $with = ['category', 'supplier'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "CategoryID");
    }

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, "SupplierID");
    }
}
