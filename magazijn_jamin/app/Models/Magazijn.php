<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Magazijn extends Model
{
    /** @use HasFactory<\Database\Factories\MagazijnFactory> */
    use HasFactory;

    protected $table = 'magazijn'; // Ensure the table name is correct

    protected $fillable = [
        'ProductId',
        'VerpakkingsEenheid',
        'AantalAanwezig',
        'IsActief',
        'Opmerkingen',
        'DatumAangemaakt',
        'DatumGewijzigd'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId', 'Id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
