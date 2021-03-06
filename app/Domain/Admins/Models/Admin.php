<?php

declare(strict_types = 1);

namespace App\Domain\Admins\Models;

use App\Domain\Products\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'types',
    ];

    protected $table = 'admins';

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
