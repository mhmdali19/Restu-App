<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    // Table name
    public $table='offers';

    // Primary Key 
    public $primaryKey='id';

    public $timestamps=false;

    use HasFactory;
}
