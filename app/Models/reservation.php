<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    public $timestamps=false;

    // Table name
    public $table='reservations';

    // Primary Key 
    public $primaryKey='id';

    use HasFactory;
}
