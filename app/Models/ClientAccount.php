<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAccount extends Model
{
    use HasFactory;

    protected $fillable=['account_number','balance'];

    public function cards(){
        return $this->hasMany(Card::class);
    }

}
