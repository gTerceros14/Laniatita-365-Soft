<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable =[
        'idcategoria','idmarca','idindustria','idgrupo','idmedida','nombre','costo_compra','nombre_generico',
        'unidad_envase','precio_list_unid','precio_costo_unid','precio_costo_paq',
        'precio_venta',
        'precio_uno','precio_dos', 'precio_tres', 'precio_cuatro',
        'stock','descripcion','condicion','fotografia',
    ];
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
    public function inventario()
    {
        return $this->hasMany('App\Inventario');
    }
    public function medida(){
        return $this->belongsTo('App\Medida');
    }
}
