<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image'];

    public function getImageAttribute($value)
    {
        return 'data:image/jpeg;base64,' . base64_encode($value);
    }
}