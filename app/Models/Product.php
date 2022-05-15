<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $timestamps=false;

    // Table name
    public $table='products';

    // Primary Key
    public $primaryKey='id';

    use HasFactory;
}
