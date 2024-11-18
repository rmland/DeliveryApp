<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PedidoHasPlato
 *
 * @property $id
 * @property $pedido_id
 * @property $plato_id
 * @property $cantidad
 * @property $precio_unitario
 * @property $subtotal
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PedidoHasPlato extends Model
{
    
    protected $perPage = 20;

    protected $table = 'pedido_has_plato';
    protected $connection = 'mysql_second';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['pedido_id', 'plato_id', 'cantidad', 'precio_unitario', 'subtotal'];

    public function plato(){
        return $this->belongsTo(Plato::class, 'plato_id');
    }

}
