<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Carrito extends Model
{
    protected $table = "carrito";
    protected $connection = "mysql_second";
    
    public function plato(){
        return $this->belongsTo(Plato::class, 'id_plato');
    }
}
