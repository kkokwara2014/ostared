<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
