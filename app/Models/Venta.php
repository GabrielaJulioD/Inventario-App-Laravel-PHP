<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $id_producto
 * @property $id_usuario
 * @property $cantidad
 * @property $fecha_venta
 *
 * @property Po[] $pos
 * @property Producto $producto
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'cantidad' => 'required',
		'fecha_venta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_producto','id_usuario','cantidad','fecha_venta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pos()
    {
        return $this->hasMany('App\Models\Po', 'id_venta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->belongsTo(usuario::class, 'id_usuario');
    }
    

}
