<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items'; //нзвание таблицы в базе
    protected $fillable=['title', 'group_id', 'manufacturer_id', 'weight', 'cost'];
    
    public function setCostAttribute($cost)
    {
        $this->attributes['cost'] = trim($cost) !== '' ? $cost : null;
    }

    public function setWeightAttribute($weight)
    {
        $this->attributes['weight'] = trim($weight) !== '' ? $weight : null;
    }

    public function setManufactureridAttribute($manufacturer_id)
    {
        $this->attributes['manufacturer_id'] = trim($manufacturer_id) !== '' ? $manufacturer_id : null;
    }
}
