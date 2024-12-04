<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $cliente_id
 * @property $fecha
 * @property $total
 * @property $estado
 * @property $direccion_envio
 * @property $notas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{

    protected $perPage = 20;

    protected $table = 'pedidos';
    protected $connection = 'mysql_second';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cliente_id', 'fecha', 'total', 'estado', 'direccion_envio', 'notas'];


    public function platos()
    {
        return $this->belongsToMany(Plato::class, 'pedido_has_plato', 'pedido_id', 'plato_id')
            ->withPivot('cantidad');
    }
    
}
