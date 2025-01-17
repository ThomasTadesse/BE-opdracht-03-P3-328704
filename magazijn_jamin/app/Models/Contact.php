<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Leverancier;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact'; // Specify the table name

    protected $primaryKey = 'Id'; // Specify the primary key

    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'straatnaam',
        'huisnummer',
        'postcode',
        'stad',
    ];

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'contact_id', 'id');
    }
    
}
