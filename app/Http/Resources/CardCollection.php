<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CardCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id"=>$this->id,
            "cardNumber"=>$this->card_number,
            "expiration_date"=>$this->expiration_date,
            "account"=>[
                "id"=>$this->client_account->id,
                "accountNumber"=>$this->client_account->account_number,
                "balance"=>$this->client_account->balance,
            ],
            "manufacturer"=>[
                "id"=>$this->card_manufacturer->id,
                "legaName"=>$this->card_manufacturer->legal_name,
                "name"=>$this->card_manufacturer->name,
                "location"=>$this->card_manufacturer->location,
            ]
        ];
    }
}
