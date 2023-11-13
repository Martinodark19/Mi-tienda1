<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories'; // Nombre de la tabla en la base de datos

    protected $fillable = ['name']; // Columnas que se pueden asignar en masa

    // Define la relación con los productos
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}

