<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardManufacturer extends Model
{
    use HasFactory;
    protected $fillable=['legal_name','name','location'];
}
