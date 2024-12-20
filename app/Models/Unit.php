<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function postings()
    {
        return $this->hasMany(Posting::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
