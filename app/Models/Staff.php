<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
    public function postings()
    {
        return $this->hasMany(Posting::class);
    }
}
