<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['photo','item_id'];


    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
