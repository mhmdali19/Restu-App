<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public $timestamps=false;

    // Table name
    public $table='menu_items';

    // Primary Key
    public $primaryKey='id';

    use HasFactory;
}
