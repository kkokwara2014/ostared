<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posting extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function caption()
    {
        return $this->belongsTo(Caption::class);
    }
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
    public function fromunit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
