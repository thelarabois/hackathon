<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsedOil extends Model
{
    use HasFactory;
    protected $table = "used_oils";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'quantity',
        'seller_id',
        'price',
        'quality',
        'status'
    ];

    public function seller()
    {
        return $this->belongsTo(User::class);
    }
}
