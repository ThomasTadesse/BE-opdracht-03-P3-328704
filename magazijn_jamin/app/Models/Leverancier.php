<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\Contact;

class Leverancier extends Model
{
    /** @use HasFactory<\Database\Factories\LeverancierFactory> */
    use HasFactory;

    protected $table = 'leverancier'; // Ensure the table name is correct

    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class, 'id', 'contact_id');
    }
    


}
