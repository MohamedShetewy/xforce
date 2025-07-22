<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','is_active','photo'];

    
    public function media()
    {
        return $this->hasMany(Media::class, 'item_id');
    }
    
}
