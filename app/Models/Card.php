<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable=['card_number','expiration_date','client_account_id','card_manufacturer_id'];

    public function client_account() {
        return $this->belongsTo(ClientAccount::class);
    }

    public function card_manufacturer(){
        return $this->belongsTo(CardManufacturer::class);
    }
}
