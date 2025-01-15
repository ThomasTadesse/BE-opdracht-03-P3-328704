<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Leverancier;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }
}
